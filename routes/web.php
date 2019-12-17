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

Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('/society/{id}/kit', 'ProduitController@find')->where("id", "[0-9]{1,}");

Route::get('list', function () {

    return view('list');
});

Route::get('cart', function () {

    return view('cart');
});
