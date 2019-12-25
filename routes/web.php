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



//Route::get('/', 'ProduitController@home');
Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'ConnectionController@register');

Route::get('register', function () {
    return view('register');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('/society/kit/{id}', 'ProduitController@getKit')->where("id", "[0-9]{1,}");

Route::get('/list', 'ClientController@getAll');
Route::get('/list/societies', 'ClientController@getAllSociety');
Route::get('/list/kits', 'ProduitController@getAllKit');

Route::get('cart', function () {

    return view('cart');
});
