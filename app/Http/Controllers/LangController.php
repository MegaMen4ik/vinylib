<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class LangController extends Controller
{

    public function changeLang($lang, Request $request, Response $response) {
        $minutes = 60;
        $response->cookie('lang', $lang, $minutes);
        return $response;

    }
}
