<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;


// =========================
// AUTH
// =========================

// Login
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// Register pembeli
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// =========================
// PRODUCTS - PUBLIC
// =========================

// Halaman utama
Route::get('/', [ProductController::class, 'index'])
    ->name('home');

// Daftar produk
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');


// =========================
// PRODUCTS - PENJUAL
// =========================

// Fitur tambah, edit, dan hapus produk
// Hanya dapat diakses oleh penjual
Route::middleware(['role:penjual'])->group(function () {

    // Tambah produk
    // Harus diletakkan sebelum /products/{id}
    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products', [ProductController::class, 'store'])
        ->name('products.store');

    // Edit produk
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
        ->name('products.edit');

    Route::put('/products/{id}', [ProductController::class, 'update'])
        ->name('products.update');

    // Hapus produk
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])
        ->name('products.destroy');
});


// =========================
// PRODUCT DETAIL
// =========================

// Detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');


// =========================
// TRANSACTIONS
// =========================

// Semua route transaksi harus login terlebih dahulu
Route::middleware(['auth'])->group(function () {

    // Daftar transaksi milik pembeli
    Route::get('/transactions', [TransactionController::class, 'index'])
        ->name('transactions.index');

    // Halaman konfirmasi pembelian
    Route::get('/transactions/create/{product}', [TransactionController::class, 'create'])
        ->name('transactions.create');

    // Konfirmasi & bayar
    Route::post('/transactions', [TransactionController::class, 'store'])
        ->name('transactions.store');
});