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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

// Inscription
Route::view('/registration', 'register');
Route::post('/registration/store', 'Register@store');

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/cgv', function () {
    return view('pages.cgv');
});
// Update user
Route::get('/modify', 'UpdateUser@display');
Route::get('update', 'UpdateUser@update');

Route::get('/product/create', 'ProductsController@create');

Route::get('/product/{slug}', 'ProductsController@view');

Route::get('/product/{id}', 'ProductsController@update');

Route::get('/products/promotions', 'ProductsController@promotions');

Route::resource('/products', 'ProductsController');

Auth::routes();
