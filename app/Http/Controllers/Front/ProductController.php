<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product; // Import Model Product
use Illuminate\Http\Request;
use App\Models\Category;




class ProductController extends Controller
{
    public function index()
{
    // Mengambil data produk dengan pembatasan 12 produk per halaman
    $products = \App\Models\Product::latest()->paginate(12);

    // Pastikan ini memanggil 'welcome' karena file Anda bernama welcome.blade.php
    return view('welcome', compact('products'));

    // Ambil semua kategori untuk filter
    $categories = \App\Models\Category::all(); 
    
    // Ambil produk dengan paginasi
    $products = \App\Models\Product::latest()->paginate(12);

    // Kirim kedua variabel ke view
    return view('catalog', compact('products', 'categories'));
}

    public function show($slug)
{
    // Cari produk berdasarkan slug, jika tidak ada tampilkan 404
    $product = \App\Models\Product::where('slug', $slug)->firstOrFail();
    
        return view('product-detail', compact('product'));
}

    // Tambahkan ini jika Anda memisahkan route katalog
    public function catalog()
{
    $products = Product::latest()->get();
  

    // 1. Ambil semua kategori untuk sidebar filter
        $categories = Category::all();

    // 2. Ambil semua produk untuk ditampilkan
        $products = Product::with('category')->get();

    // 3. Kirim kedua variabel ke view
    return view('catalog', compact('categories', 'products'));
    }
}