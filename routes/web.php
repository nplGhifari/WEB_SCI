<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - SCI Safety Center Indonesia
|--------------------------------------------------------------------------
*/

// --- HALAMAN UTAMA & KATALOG ---
// Mengarahkan '/' dan '/katalog' ke fungsi index di ProductController
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/katalog', [ProductController::class, 'catalog'])->name('catalog');

// --- DETAIL PRODUK ---
// Menggunakan satu standar route saja: /product/{slug}
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// --- HALAMAN STATIS ---
// Menggunakan PageController untuk konten informasi
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');