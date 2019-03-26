<?php

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


Route::get('/','SongsController@index');
Route::get('/home','SongsController@index');

Route::get('/music_news', function () {
    return view('music_news');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/single_playlist', function () {
    return view('single_playlist');
});

Route::get('index','SearchController@search');

Route::resource('songs','SongsController');
Route::resource('genre', 'GenresController');
Route::resource('artist','ArtistsController');
Route::resource('album','AlbumsController');

Route::get('/artist_dynamic', function() {
    return View::make('playlist');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// google login with socialite
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
