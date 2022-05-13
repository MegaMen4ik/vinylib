<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function show(Request $request) {
        $songs = Songs::all();
        return view('pages.songs', ['songs' => $songs]);
    }
}
