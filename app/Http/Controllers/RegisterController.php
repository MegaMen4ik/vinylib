<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showForm(Request $request) {
        $user = Auth::user();
        if (!empty($user))
            return view('pages.home');
        return view('auth.register');
    }
}
