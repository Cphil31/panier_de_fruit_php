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
Route::get('/products', "PanierController@getData");

Route::post('/products/add/{id}', "PanierController@getAdd");
Route::post('/products/down/{id}', "PanierController@getDown");

Route::post('/products/form', "PanierController@show");

