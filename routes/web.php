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



Route::get('/society/kit/{id}', 'ProduitController@getKit')->where("id", "[0-9]{1,}"); //Un Kit


Route::group(['prefix' => 'list'], function () {
    // Tous les kits et societies \\
    Route::get('/', 'UserController@getAll'); //tout

    // Kits \\
    Route::group(['prefix' => 'kits'], function () {
        Route::get('/', 'ProduitController@getAllKit'); //Kits
        Route::get('/orderBy/grade', 'ProduitController@getAllKitbyGrade'); //Kits orderby Grade
        Route::get('/orderBy/priceDesc', 'ProduitController@getAllKitbyPriceDesc'); //Kits orderby PrixDesc
        Route::get('/orderBy/priceAsc', 'ProduitController@getAllKitbyPriceAsc'); //Kits orderby PrixAsc
        Route::get('/orderBy/nameDesc', 'ProduitController@getAllKitbyNameDesc'); //Kit orderby NameDesc
        Route::get('/orderBy/nameAsc', 'ProduitController@getAllKitbyNameAsc');  //Kit orderby NameAsc
    });

    Route::group(['prefix' => 'societies'], function () {
        // Societies \\
        Route::get('/', 'UserController@getAllSociety'); // Societes
        Route::get('/orderBy/nameDesc', 'UserController@getAllKitbyNameDesc'); //Societes orderby NameDesc
        Route::get('/orderBy/nameAsc', 'UserController@getAllKitbyNameAsc');  //Societes orderby NameAsc
    });
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
