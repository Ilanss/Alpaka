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
    return view('app');
});

// Inscription
Route::view('/registration', 'register');
Route::post('/registration/store', 'Register@store');

// Login
Route::get('/auth', 'Login@auth');

// Logout
Route::get('/logout', 'Login@logout');

// Update user
Route::get('/modify', 'UpdateUser@display');
Route::get('update', 'UpdateUser@update');

Auth::routes();
