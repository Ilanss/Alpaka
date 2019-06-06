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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

// Registration
Route::get('/registration', 'Registration@form');
Route::post('/registration/store', 'Registration@store');

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/admin', function () {
    return view('pages.admin');
});
// Authentication
Route::get('/auth', 'authentication@form');
Route::get('/auth/login', 'Authentication@login');

// Logout
Route::get('/auth/logout', 'Authentication@logout');

Route::get('/cgv', function () {
    return view('pages.cgv');
});
// Update user
Route::get('/auth/modify', 'UpdateUser@form');
Route::get('/auth/update', 'UpdateUser@update');

// Products
Route::get('/product/create', 'ProductsController@create');
Route::get('/product/{slug}', 'ProductsController@view');
Route::get('/products/search', 'ProductsController@search')->name('products.search');
Route::get('/products/promotions', 'ProductsController@promotions');
Route::resource('/products', 'ProductsController');

// Auth (create with 'php artisan make:auth')
Auth::routes();
