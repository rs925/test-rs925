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
    return view('welcome');
});

Route::get('/', function () {
    return view('Pages.index');
});


Route::get('/contact', function () {
    return view('Pages.contact');
});

Route::get('/about', function () {
    return view('Pages.about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
