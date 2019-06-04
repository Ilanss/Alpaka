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

Route::get('/product/create', 'ProductsController@create');

Route::get('/product/{slug}', 'ProductsController@view');

Route::get('/product/{id}', 'ProductsController@update');

Route::get('/products/promotions', 'ProductsController@promotions');

Route::resource('/products', 'ProductsController');
