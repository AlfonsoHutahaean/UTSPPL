<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    /**
     * =========================================================
     * MASS ASSIGNMENT
     * =========================================================
     *
     * Field yang boleh diisi menggunakan Transaction::create().
     */
    protected $fillable = [
        'product_id',
        'buyer_id',
        'seller_id',
        'total_price',
        'status',
    ];


    /**
     * =========================================================
     * CASTING
     * =========================================================
     *
     * total_price dipastikan menjadi angka.
     *
     * Karena harga produk berupa nominal rupiah tanpa desimal,
     * integer cocok digunakan.
     */
    protected $casts = [
        'total_price' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    /**
     * =========================================================
     * PRODUK
     * =========================================================
     *
     * Satu transaksi hanya berkaitan dengan satu produk.
     *
     * Contoh:
     *
     * Transaction
     *      ↓
     * Product "Kolor"
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(
            Product::class,
            'product_id'
        );
    }


    /**
     * =========================================================
     * PEMBELI
     * =========================================================
     *
     * buyer_id pada tabel transactions mengarah ke
     * id pada tabel users.
     *
     * Jadi:
     *
     * Transaction
     *      ↓
     * buyer_id
     *      ↓
     * User
     */
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'buyer_id'
        );
    }


    /**
     * =========================================================
     * PENJUAL
     * =========================================================
     *
     * seller_id pada tabel transactions mengarah ke
     * id pada tabel users.
     *
     * Jadi:
     *
     * Transaction
     *      ↓
     * seller_id
     *      ↓
     * User
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'seller_id'
        );
    }


    /**
     * =========================================================
     * CEK STATUS PAID
     * =========================================================
     *
     * Mengecek apakah transaksi sudah dibayar.
     */
    public function isPaid(): bool
    {
        return $this->status === 'paid';
    }


    /**
     * =========================================================
     * CEK STATUS COMPLETED
     * =========================================================
     *
     * Mengecek apakah transaksi sudah selesai.
     */
    public function isCompleted(): bool
    {
        return $this->status === 'completed';
    }


    /**
     * =========================================================
     * CEK STATUS CONFIRMED
     * =========================================================
     *
     * Mengecek apakah transaksi sudah dikonfirmasi.
     */
    public function isConfirmed(): bool
    {
        return $this->status === 'confirmed';
    }


    /**
     * =========================================================
     * CEK STATUS CANCELLED
     * =========================================================
     *
     * Mengecek apakah transaksi dibatalkan.
     */
    public function isCancelled(): bool
    {
        return $this->status === 'cancelled';
    }


    /**
     * =========================================================
     * CEK TRANSAKSI BERHASIL
     * =========================================================
     *
     * Untuk CampusMarket, transaksi dianggap berhasil jika
     * statusnya completed.
     */
    public function isSuccessful(): bool
    {
        return in_array(
            $this->status,
            [
                'paid',
                'confirmed',
                'completed',
            ],
            true
        );
    }


    /**
     * =========================================================
     * LABEL STATUS
     * =========================================================
     *
     * Digunakan untuk menampilkan status yang lebih mudah
     * dipahami oleh pengguna.
     */
    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {

            'paid' =>
                'Sudah Dibayar',

            'confirmed' =>
                'Dikonfirmasi',

            'completed' =>
                'Selesai',

            'cancelled' =>
                'Dibatalkan',

            'pending' =>
                'Menunggu Pembayaran',

            default =>
                ucfirst($this->status ?? 'Tidak diketahui'),
        };
    }


    /**
     * =========================================================
     * LABEL HARGA
     * =========================================================
     *
     * Contoh:
     *
     * 100000
     *
     * menjadi:
     *
     * Rp 100.000
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format(
            $this->total_price,
            0,
            ',',
            '.'
        );
    }
}