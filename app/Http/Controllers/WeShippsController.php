<?php

namespace App\Http\Controllers;

use App\Models\Weshipp;

class WeShippsController
{
    public function index()
    {
        return view('front.pages.we-shipps.listing');
    }

    public function show($weshippId)
    {
        $weshipp = WeShipp::find($weshippId);
        return view('front.pages.we-shipps.show', compact('weshipp'));
    }
}
