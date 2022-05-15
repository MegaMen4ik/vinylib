<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(Request $request) {
        $users = User::get('name');
        return view('pages.profiles', ['users' => $users]);
    }
}
