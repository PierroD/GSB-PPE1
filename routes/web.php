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

// Tous les kits et societies \\
Route::get('/list', 'UserController@getAll'); //tout


Route::get('/society/kit/{id}', 'ProduitController@getKit')->where("id", "[0-9]{1,}"); //Un Kit


Route::group(['prefix' => 'list'], function () {
    // Kits \\
    Route::get('/kits', 'ProduitController@getAllKit'); //Kits
    Route::get('/kits/orderBy/grade', 'ProduitController@getAllKitbyGrade'); //Kits orderby Grade
    Route::get('/kits/orderBy/priceDesc', 'ProduitController@getAllKitbyPriceDesc'); //Kits orderby PrixDesc
    Route::get('/kits/orderBy/priceAsc', 'ProduitController@getAllKitbyPriceAsc'); //Kits orderby PrixAsc
    Route::get('/kits/orderBy/nameDesc', 'ProduitController@getAllKitbyNameDesc'); //Kit orderby NameDesc
    Route::get('/kits/orderBy/nameAsc', 'ProduitController@getAllKitbyNameAsc');  //Kit orderby NameAsc
    // Societies \\
    Route::get('/societies', 'UserController@getAllSociety'); // Societes
    Route::get('/societies/orderBy/nameDesc', 'UserController@getAllKitbyNameDesc'); //Societes orderby NameDesc
    Route::get('/societies/orderBy/nameAsc', 'UserController@getAllKitbyNameAsc');  //Societes orderby NameAsc

});



// Login \\
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'ConnectionController@connection');

// Register \\
Route::get('register', function () {
    return view('register');
});
Route::post('/register', 'ConnectionController@register');

// Disconnect \\
Route::get('/disconnect', 'ConnectionController@logout');


Route::get('profil', function () {
    return view('profil');
});

Route::get('createKit', function () {
    return view('createKit');
});



Route::get('cart', function () {

    return view('cart');
});
Route::get('test', 'TestController@test1');
