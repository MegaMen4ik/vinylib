<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistsController extends Controller
{
    public function show(Request $request) {
        $artists = Artist::with('bands')->get();
        return view('pages.artists', ['artists' => $artists]);
    }
}
