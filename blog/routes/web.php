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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
// Route::get('/welcome', 'AuthController@welcome');
// Route::post('/welcome', 'AuthController@welcome_pos');
Route::post('/welcome', 'AuthController@selamat_datang');

// Route::get('/register', function () {
//     return view('form');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/master', function() {
    return view ('/adminlte/master'); //master.blade.php
});

Route::get('/', function() {
    return view ('items.index'); //index.blade.php
});