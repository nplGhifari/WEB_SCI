<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; // Pastikan ini di-import
use App\Models\Product;  // Pastikan ini di-import

class PageController extends Controller
{
    public function about()
    {
        // Pastikan Anda memiliki file resources/views/about.blade.php
        return view('about');
    }

    public function contact()
    {
        // Pastikan Anda memiliki file resources/views/contact.blade.php
        return view('contact');
    }
}