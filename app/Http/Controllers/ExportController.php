<?php

namespace App\Http\Controllers;

use App\Exports\AlbumsExport;
use App\Exports\ArtistsExport;
use App\Exports\SongsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportSongs()
    {
        return Excel::download(new SongsExport, 'songs.xlsx');
    }
    public function exportAlbums()
    {
        return Excel::download(new AlbumsExport(), 'albums.xlsx');
    }
    public function exportArtists()
    {
        return Excel::download(new ArtistsExport(), 'artists.xlsx');
    }
}
