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
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->middleware(['auth'])->name('dashboard');

Route::get('/lang/{lang}', 'App\Http\Controllers\LangController@changeLang')->name('lang');

Route::get('/songs', 'App\Http\Controllers\SongsController@show')->middleware(['auth'])->name('songs');
Route::get('/albums', 'App\Http\Controllers\AlbumsController@show')->middleware(['auth'])->name('albums');
Route::get('/artists', 'App\Http\Controllers\ArtistsController@show')->middleware(['auth'])->name('artists');

require __DIR__.'/auth.php';
