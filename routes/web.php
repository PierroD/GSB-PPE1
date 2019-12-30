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
Route::get('/', 'ProduitController@getIndex'); //index
Route::get('/list/kits', 'ProduitController@getAllKit'); //Kits
Route::get('/society/kit/{id}', 'ProduitController@getKit')->where("id", "[0-9]{1,}"); //Un Kit
Route::get('/list/kits/orderBy/grade', 'ProduitController@getAllKitbyGrade'); //Kits orderby Grade
Route::get('/list/kits/orderBy/priceDesc', 'ProduitController@getAllKitbyPriceDesc'); //Kits orderby PrixDesc
Route::get('/list/kits/orderBy/priceAsc', 'ProduitController@getAllKitbyPriceAsc'); //Kits orderby PrixAsc
Route::get('/list/kits/orderBy/nameDesc', 'ProduitController@getAllKitbyNameDesc'); //Kit orderby NameDesc
Route::get('/list/kits/orderBy/nameAsc', 'ProduitController@getAllKitbyNameAsc');  //Kit orderby NameAsc

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

Route::get('createKit', function () {
    return view('createKit');
});

Route::get('/list', 'ClientController@getAll'); //tout
Route::post('/list', 'ClientController@getAllOrderBy'); //order by
Route::get('/list/societies', 'ClientController@getAllSociety'); // List des societes


Route::get('cart', function () {

    return view('cart');
});
