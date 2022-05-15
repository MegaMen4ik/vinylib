<?php

namespace App\Http\Controllers;

use App\Imports\BandsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function show() {
        return view('pages.import');
    }
    public function importBands(Request $request)
    {
        Excel::import(new BandsImport(), request()->file('imported'));
        return redirect('/');
    }
}
