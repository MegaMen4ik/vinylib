<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');
Route::get('/lang/{lang}', 'App\Http\Controllers\LangController@changeLang')->name('lang');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/songs', 'App\Http\Controllers\SongsController@show')->name('songs');
    Route::get('/albums', 'App\Http\Controllers\AlbumsController@show')->name('albums');
    Route::get('/artists', 'App\Http\Controllers\ArtistsController@show')->name('artists');
    Route::get('/profiles', 'App\Http\Controllers\ProfilesController@show')->name('profiles');
    Route::get('/bands', 'App\Http\Controllers\BandsController@show')->name('bands');
    Route::get('/export/songs', 'App\Http\Controllers\ExportController@exportSongs')->name('exportSongs');
    Route::get('/export/albums', 'App\Http\Controllers\ExportController@exportAlbums')->name('exportAlbums');
    Route::get('/export/artists', 'App\Http\Controllers\ExportController@exportArtists')->name('exportArtists');
    Route::get('/import', 'App\Http\Controllers\ImportController@show')->name('import');
    Route::post('/import/bands', 'App\Http\Controllers\ImportController@importBands')->name('importBands');
});

require __DIR__.'/auth.php';
