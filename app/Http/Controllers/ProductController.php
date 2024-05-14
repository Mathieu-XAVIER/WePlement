<?php

namespace App\Http\Controllers;

class ProductController
{
    public function index()
    {
        return view('front.pages.products.listing');
    }
}
