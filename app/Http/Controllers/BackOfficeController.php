<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('front.pages.back-office.backoffice');
    }
}
