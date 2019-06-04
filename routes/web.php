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
Route::get('/home','HomeController@index')->name('home');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/admin', function () {
    return view('pages.admin');
});
