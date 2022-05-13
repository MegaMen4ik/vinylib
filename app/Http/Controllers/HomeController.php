<?php

namespace App\Http\Controllers;

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
        return view('pages.home');
    }
}
