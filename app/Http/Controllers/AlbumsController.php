<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    public function show(Request $request) {
        $albums = Album::all();
        return view('pages.albums', ['albums' => $albums]);
    }

}
