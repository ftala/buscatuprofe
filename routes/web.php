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

Route::get('/', function () {

    return view('index');

});

Route::get('registro', function () {

    return view('registro');

});

Route::get('about', function () {

    return view('about');

});

Route::get('usuario/{user}', function($id) {

		$user=DB::table('users')->find($id);

		return view('usuario', compact('user'));

});

Route::get('contact', function () {

	return view('contact');

});

Route::get('social', function () {

    return view('social');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
