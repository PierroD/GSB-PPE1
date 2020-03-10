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



// Index \\
Route::get('/', 'ProduitController@getIndex'); 

// getKit \\
Route::get('/society/kit/{id}', 'ProduitController@getKit')->where("id", "[0-9]{1,}");
// getSociety \\
Route::get('society/{id}', 'CompanyController@getSociety')->where("id", "[0-9]{1,}");

// Create Kit \\
Route::get('/createKit', function () {
    return view('kit.create');
});

Route::group(['prefix' => 'list'], function () {
    // Tous les kits et societies \\
    Route::get('/', 'CompanyController@getList'); //tout
    
    // Kits \\
    Route::group(['prefix' => 'kits'], function () {
        Route::get('/', 'ProduitController@getAllKit'); //All Kits
        Route::get('/orderBy/grade', 'ProduitController@getAllKitbyGrade'); //Kits orderby Grade
        Route::get('/orderBy/priceDesc', 'ProduitController@getAllKitbyPriceDesc'); //Kits orderby PrixDesc
        Route::get('/orderBy/priceAsc', 'ProduitController@getAllKitbyPriceAsc'); //Kits orderby PrixAsc
        Route::get('/orderBy/nameDesc', 'ProduitController@getAllKitbyNameDesc'); //Kit orderby NameDesc
        Route::get('/orderBy/nameAsc', 'ProduitController@getAllKitbyNameAsc');  //Kit orderby NameAsc
        Route::get('/orderBy/lastest', 'ProduitController@getAllKitbyLastest');  //Kit orderby Lastest
    });
    
    Route::group(['prefix' => 'societies'], function () {
        // Societies \\
        Route::get('/', 'CompanyController@getAllSociety'); // Societes
        Route::get('/orderBy/nameDesc', 'CompanyController@getAllLaboratorybyNameDesc'); //Societes orderby NameDesc
        Route::get('/orderBy/nameAsc', 'CompanyController@getAllLaboratorybyNameAsc');  //Societes orderby NameAsc
    });
});

Route::group(['prefix' => 'shoppingcart'], function () {
    Route::get('/', 'ShoppingController@getIndex');
    Route::get('/add/{id}/{quantity}', 'ShoppingController@add');
    Route::get('/delete/{id}', 'ShoppingController@delete');
    Route::get('/empty', 'ShoppingController@empty');
});

// Login \\
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', 'AuthenticationController@setSignin');

// Register \\
Route::get('/register', 'CompanyController@getCompanies');
Route::post('/register', 'AuthenticationController@setRegister');

// Disconnect \\
Route::get('/disconnect', 'AuthenticationController@setLogout');

// Profil \\
Route::get('/profil', 'RolesController@getRoleProfile');

// Paiement \\
Route::get('/payment', 'PaiementController@index');
Route::post('/payment', 'PaiementController@store')->name('checkout.store');
Route::get('/thankyou', 'PaiementController@thankYou');


// Admin \\
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'UserController@getAll');
    Route::get('/setrole', 'RoleController@setRole');
    Route::get('/society', 'CompanyController@getAllCompanies');
    Route::get('/society/delete/{id}', 'CompanyController@deleteCompany');
    Route::get('/product', 'ProduitController@getAllProducts');
});