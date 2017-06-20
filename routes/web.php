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

Route::get('usuario/{user}', function ($id) {

	return view('usuario');

});

Route::get('contact', function () {

	return view('contact');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
