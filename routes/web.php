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

<<<<<<< HEAD
// Inscription
Route::view('/registration', 'register');
Route::post('/registration/store', 'Register@store');

// Login
Route::get('/auth', 'Login@auth');

// Logout
Route::get('/logout', 'Login@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/', function () {
    return view('pages.admin');
});
>>>>>>> 7173614f471e981556965297436b16acfec633c5
