<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            // Produk yang dibeli
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            // Pembeli
            $table->foreignId('buyer_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Penjual
            $table->foreignId('seller_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Harga produk saat transaksi
            $table->decimal('total_price', 15, 2);

            // Status transaksi
            $table->enum('status', [
                'pending',
                'paid',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};