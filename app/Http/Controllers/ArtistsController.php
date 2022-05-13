<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;

class ArtistsController extends Controller
{
    public function show(Request $request) {
        $artists = Artists::all();
        return view('pages.artists', ['artists' => $artists]);
    }
}
