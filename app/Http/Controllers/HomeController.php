<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('front.pages.home', compact('categories'));
    }
}
