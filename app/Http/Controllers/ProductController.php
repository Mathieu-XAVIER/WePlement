<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController
{
    public function index()
    {
        $categories = Category::all();
        return view('front.pages.products.listing', compact('categories'));
    }
}
