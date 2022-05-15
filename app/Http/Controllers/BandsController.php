<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    public function show(Request $request) {
        $bands = Band::all();
        return view('pages.bands', ['bands' => $bands]);
    }
}
