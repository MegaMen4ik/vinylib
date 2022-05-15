<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function show(Request $request) {
        $songs = Song::with(['album:id,name,release_date'])->get(['name', 'album_id', 'length', 'release_date']);
        return view('pages.songs', ['songs' => $songs]);
    }
}
