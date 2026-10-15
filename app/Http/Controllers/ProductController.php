<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Menampilkan semua produk.
     *
     * Pembeli dan penjual sama-sama bisa melihat produk.
     */
    public function index(Request $request)
    {
        $query = Product::with('category');

        // Pencarian berdasarkan nama produk
        if ($request->filled('search')) {
            $query->where(
                'name',
                'like',
                '%' . $request->search . '%'
            );
        }

        // Filter kategori
        if ($request->filled('category_id')) {
            $query->where(
                'category_id',
                $request->category_id
            );
        }

        // Filter kondisi
        if ($request->filled('condition')) {
            $query->where(
                'condition',
                $request->condition
            );
        }

        // Filter lokasi
        if ($request->filled('location')) {
            $query->where(
                'location',
                'like',
                '%' . $request->location . '%'
            );
        }

        // Filter jenis transaksi
        if ($request->filled('transaction_type')) {
            $query->where(
                'transaction_type',
                $request->transaction_type
            );
        }

        $products = $query->latest()->get();

        $categories = Category::all();

        return view(
            'products.index',
            compact('products', 'categories')
        );
    }


    /**
     * Menampilkan detail produk.
     *
     * Pembeli dan penjual bisa melihat detail.
     */
    public function show(string $id)
    {
        $product = Product::with('category')
            ->findOrFail($id);

        return view(
            'products.show',
            compact('product')
        );
    }


    /**
     * Menampilkan form tambah produk.
     *
     * Hanya PENJUAL.
     */
    public function create()
    {
        // Pastikan sudah login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Pastikan role adalah penjual
        if (auth()->user()->role !== 'penjual') {
            abort(403, 'Hanya penjual yang dapat menambahkan produk.');
        }

        $categories = Category::all();

        return view(
            'products.create',
            compact('categories')
        );
    }


    /**
     * Menyimpan produk baru.
     *
     * Hanya PENJUAL.
     */
    public function store(Request $request)
    {
        // Pastikan sudah login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Pastikan role adalah penjual
        if (auth()->user()->role !== 'penjual') {
            abort(403, 'Hanya penjual yang dapat menambahkan produk.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'category_id' => 'required|exists:categories,id',

            'description' => 'nullable|string',

            'price' => 'required|numeric|min:0',

            'condition' => 'required|string|max:50',

            'location' => 'required|string|max:255',

            'transaction_type' => 'required|string|max:50',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        /*
         * Upload foto produk
         */
        if ($request->hasFile('image')) {

            $validated['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }


        /*
         * User ID diambil dari user yang sedang login.
         */
        $validated['user_id'] = auth()->id();

        /*
         * Status produk
         */
        $validated['status'] = 'active';


        /*
         * Simpan produk
         */
        Product::create($validated);


        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Produk berhasil ditambahkan.'
            );
    }


    /**
     * Menampilkan form edit produk.
     *
     * Hanya PENJUAL dan pemilik produk.
     */
    public function edit(string $id)
    {
        // Pastikan login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Pastikan penjual
        if (auth()->user()->role !== 'penjual') {
            abort(403, 'Pembeli tidak dapat mengedit produk.');
        }

        $product = Product::findOrFail($id);


        /*
         * Pastikan produk milik penjual yang sedang login.
         */
        if ($product->user_id !== auth()->id()) {
            abort(
                403,
                'Kamu tidak dapat mengedit produk milik penjual lain.'
            );
        }

        $categories = Category::all();

        return view(
            'products.edit',
            compact('product', 'categories')
        );
    }


    /**
     * Mengupdate produk.
     *
     * Hanya PENJUAL dan pemilik produk.
     */
    public function update(Request $request, string $id)
    {
        // Pastikan login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Pastikan penjual
        if (auth()->user()->role !== 'penjual') {
            abort(403, 'Pembeli tidak dapat mengedit produk.');
        }

        $product = Product::findOrFail($id);


        /*
         * Pastikan produk milik penjual yang login.
         */
        if ($product->user_id !== auth()->id()) {
            abort(
                403,
                'Kamu tidak dapat mengedit produk milik penjual lain.'
            );
        }


        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'category_id' => 'required|exists:categories,id',

            'description' => 'nullable|string',

            'price' => 'required|numeric|min:0',

            'condition' => 'required|string|max:50',

            'location' => 'required|string|max:255',

            'transaction_type' => 'required|string|max:50',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        /*
         * Jika upload foto baru
         */
        if ($request->hasFile('image')) {

            // Hapus foto lama
            if ($product->image) {
                Storage::disk('public')
                    ->delete($product->image);
            }

            // Simpan foto baru
            $validated['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }


        /*
         * Update produk
         */
        $product->update($validated);


        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Produk berhasil diperbarui.'
            );
    }


    /**
     * Menghapus produk.
     *
     * Hanya PENJUAL dan pemilik produk.
     */
    public function destroy(string $id)
    {
        // Pastikan login
        if (!auth()->check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        // Pastikan penjual
        if (auth()->user()->role !== 'penjual') {
            abort(403, 'Pembeli tidak dapat menghapus produk.');
        }

        $product = Product::findOrFail($id);


        /*
         * Pastikan produk milik penjual yang login.
         */
        if ($product->user_id !== auth()->id()) {
            abort(
                403,
                'Kamu tidak dapat menghapus produk milik penjual lain.'
            );
        }


        /*
         * Hapus foto produk
         */
        if ($product->image) {

            Storage::disk('public')
                ->delete($product->image);
        }


        /*
         * Hapus produk
         */
        $product->delete();


        return redirect()
            ->route('products.index')
            ->with(
                'success',
                'Produk berhasil dihapus.'
            );
    }
}