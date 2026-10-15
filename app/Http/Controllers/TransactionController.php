<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * =========================================================
     * MENAMPILKAN HALAMAN KONFIRMASI PEMBELIAN
     * =========================================================
     *
     * Pembeli memilih satu produk dan masuk ke halaman
     * konfirmasi sebelum melakukan pembayaran.
     *
     * Sistem CampusMarket:
     * 1 produk = 1 barang
     * sehingga tidak ada quantity.
     */
    public function create($product)
    {
        // Pastikan user sudah login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Silakan login terlebih dahulu untuk membeli produk.'
                );
        }


        // =====================================================
        // HANYA PEMBELI YANG BOLEH MEMBELI
        // =====================================================

        if (auth()->user()->role !== 'pembeli') {
            abort(
                403,
                'Hanya pembeli yang dapat membeli produk.'
            );
        }


        // =====================================================
        // CARI PRODUK
        // =====================================================

        $product = Product::with('user')
            ->findOrFail($product);


        // =====================================================
        // TIDAK BOLEH MEMBELI PRODUK SENDIRI
        // =====================================================

        if ((int) $product->user_id === (int) auth()->id()) {

            return redirect()
                ->route(
                    'products.show',
                    $product->id
                )
                ->with(
                    'error',
                    'Kamu tidak dapat membeli produk milik sendiri.'
                );
        }


        // =====================================================
        // CEK STATUS PRODUK
        // =====================================================
        //
        // Hanya produk dengan status active yang dapat dibeli.
        //
        // Jika status sudah sold, berarti barang sudah dibeli
        // oleh pembeli lain.
        //

        if ($product->status !== 'active') {

            return redirect()
                ->route(
                    'products.show',
                    $product->id
                )
                ->with(
                    'error',
                    'Produk ini sudah terjual atau tidak tersedia.'
                );
        }


        // =====================================================
        // TAMPILKAN HALAMAN KONFIRMASI
        // =====================================================

        return view(
            'transactions.create',
            compact('product')
        );
    }


    /**
     * =========================================================
     * MEMPROSES KONFIRMASI DAN PEMBAYARAN
     * =========================================================
     *
     * Setelah pembeli menekan:
     *
     * "Konfirmasi & Bayar"
     *
     * maka:
     *
     * 1. Transaksi dibuat.
     * 2. Harga diambil dari database.
     * 3. Produk menjadi sold.
     * 4. Pembeli diarahkan ke daftar transaksi.
     */
    public function store(Request $request)
    {
        // =====================================================
        // CEK LOGIN
        // =====================================================

        if (!auth()->check()) {

            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Silakan login terlebih dahulu.'
                );
        }


        // =====================================================
        // HANYA PEMBELI
        // =====================================================

        if (auth()->user()->role !== 'pembeli') {

            abort(
                403,
                'Hanya pembeli yang dapat melakukan transaksi.'
            );
        }


        // =====================================================
        // VALIDASI PRODUCT ID
        // =====================================================

        $validated = $request->validate([
            'product_id' => [
                'required',
                'integer',
                'exists:products,id',
            ],
        ]);


        // =====================================================
        // CARI PRODUK
        // =====================================================

        $product = Product::findOrFail(
            $validated['product_id']
        );


        // =====================================================
        // CEK PRODUK MASIH TERSEDIA
        // =====================================================

        if ($product->status !== 'active') {

            return redirect()
                ->route(
                    'products.show',
                    $product->id
                )
                ->with(
                    'error',
                    'Produk ini sudah dibeli atau tidak tersedia.'
                );
        }


        // =====================================================
        // TIDAK BOLEH MEMBELI PRODUK SENDIRI
        // =====================================================

        if ((int) $product->user_id === (int) auth()->id()) {

            abort(
                403,
                'Kamu tidak dapat membeli produk milik sendiri.'
            );
        }


        // =====================================================
        // CEK APAKAH PRODUK SUDAH PERNAH DIBELI
        // =====================================================
        //
        // Ini merupakan pengamanan tambahan.
        //
        // Karena 1 produk hanya boleh dimiliki oleh 1 pembeli,
        // maka produk yang sudah memiliki transaksi sukses
        // tidak boleh dibuatkan transaksi kedua.
        //

        $alreadyPurchased = Transaction::where(
            'product_id',
            $product->id
        )
        ->whereIn('status', [
            'paid',
            'completed',
            'confirmed',
        ])
        ->exists();


        if ($alreadyPurchased) {

            // Pastikan status produk juga sold
            if ($product->status !== 'sold') {

                $product->update([
                    'status' => 'sold',
                ]);
            }

            return redirect()
                ->route(
                    'products.show',
                    $product->id
                )
                ->with(
                    'error',
                    'Produk ini sudah dibeli oleh pembeli lain.'
                );
        }


        // =====================================================
        // BUAT TRANSAKSI
        // =====================================================
        //
        // Tidak ada quantity karena:
        //
        // 1 produk = 1 barang preloved.
        //
        // Harga diambil langsung dari database agar pembeli
        // tidak dapat mengubah harga melalui form.
        //

        $transaction = Transaction::create([
            'product_id' => $product->id,

            'buyer_id' => auth()->id(),

            'seller_id' => $product->user_id,

            'total_price' => $product->price,

            'status' => 'completed',
        ]);


        // =====================================================
        // PRODUK LANGSUNG MENJADI TERJUAL
        // =====================================================

        $product->update([
            'status' => 'sold',
        ]);


        // =====================================================
        // REDIRECT KE DAFTAR TRANSAKSI
        // =====================================================

        return redirect()
            ->route('transactions.index')
            ->with(
                'success',
                'Pembayaran berhasil. Produk "' .
                $product->name .
                '" berhasil dibeli.'
            );
    }


    /**
     * =========================================================
     * MENAMPILKAN DAFTAR TRANSAKSI
     * =========================================================
     *
     * Jika user adalah pembeli:
     *
     * - tampilkan Produk yang Dibeli
     *
     * Jika user adalah penjual:
     *
     * - tampilkan Produk yang Terjual
     */
    public function index()
    {
        // =====================================================
        // CEK LOGIN
        // =====================================================

        if (!auth()->check()) {

            return redirect()
                ->route('login')
                ->with(
                    'error',
                    'Silakan login terlebih dahulu.'
                );
        }


        // =====================================================
        // PEMBELI
        // =====================================================

        if (auth()->user()->role === 'pembeli') {

            /*
             * Ambil transaksi milik pembeli yang sedang login.
             *
             * product      = produk yang dibeli
             * product.user = penjual produk
             */

            $transactions = Transaction::with([
                'product.user',
                'seller',
            ])
            ->where(
                'buyer_id',
                auth()->id()
            )
            ->latest()
            ->get();


            /*
             * Pembeli tidak membutuhkan daftar produk terjual.
             *
             * Kita tetap membuat variabel ini supaya
             * transactions/index.blade.php tidak error.
             */

            $soldTransactions = collect();


            return view(
                'transactions.index',
                compact(
                    'transactions',
                    'soldTransactions'
                )
            );
        }


        // =====================================================
        // PENJUAL
        // =====================================================

        if (auth()->user()->role === 'penjual') {

            /*
             * Penjual tidak membutuhkan transaksi sebagai pembeli.
             */

            $transactions = collect();


            /*
             * Ambil transaksi yang berasal dari produk milik
             * penjual yang sedang login.
             *
             * seller_id digunakan untuk memastikan transaksi
             * memang berasal dari penjual tersebut.
             */

            $soldTransactions = Transaction::with([
                'product.user',
                'buyer',
            ])
            ->where(
                'seller_id',
                auth()->id()
            )
            ->whereIn(
                'status',
                [
                    'paid',
                    'completed',
                    'confirmed',
                ]
            )
            ->latest()
            ->get();


            return view(
                'transactions.index',
                compact(
                    'transactions',
                    'soldTransactions'
                )
            );
        }


        // =====================================================
        // ROLE TIDAK DIKENAL
        // =====================================================

        abort(
            403,
            'Role pengguna tidak memiliki akses ke halaman transaksi.'
        );
    }
}