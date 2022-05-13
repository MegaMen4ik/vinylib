<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;

class AlbumsController extends Controller
{
    public function show(Request $request) {
        $albums = Albums::all();
        return view('pages.albums', ['albums' => $albums]);
    }
}
