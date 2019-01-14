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

// Route::get('/', function () {
//     return view('master');
// });

Route::get('/', function () {
    if(Auth::guest())
		{
    		return view('master');
		}
     else{
     		 return view('home');
     	}
});
Route::get('/home', function () {
    return view('home');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// google login with socialite
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
