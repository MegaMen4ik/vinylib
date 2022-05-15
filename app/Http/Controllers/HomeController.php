<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;


class HomeController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        if (empty($user))
            return view('pages.guest', [
                'locales' => config('locales.list'),
                'localer' => App::getLocale(),
                'localet' => Lang::getLocale()
            ]);
        $bands = collect();
        $bandsData = Band::with(['songs', 'albums', 'artists'])->get();
        foreach ($bandsData as $bandData) {
            $albumSongs = 0;

            foreach ($bandData->albums as $album) {
                $albumSongs += $album->albums->songs->count();
            }
            $bands->push([
                'name' => $bandData->name,
                'songsCount' => $bandData->songs->count() + $albumSongs,
                'albumsCount' => $bandData->albums ? $bandData->albums->count() : 0,
                'artistsCount' => $bandData->artists->count(),
            ]);
        }
        return view('pages.home', ['bands' => $bands]);
    }
}
