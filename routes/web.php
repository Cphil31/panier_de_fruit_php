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
Route::get('/products', "PanierController@index");
//Ajout des stocks
Route::post('/products/add/{id}', "PanierController@getAdd");
Route::post('/products/down/{id}', "PanierController@getDown");

// afficher le formulaire
Route::get('/products/new', "PanierController@getNew");
Route::post('/products/form',"PanierController@postInfo");
//supprimer
Route::get('/products/delete/{id}','PanierController@deleteProduct');

//editer
Route::get('/products/editer',"PanierController@editer");

