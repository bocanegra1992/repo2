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

Route::get('/', function () {   //localhost:8000
    return view('welcome');
});

Route::resource('products','ProductController'); 
Route::resource('aeropuertos','aeropuertosController'); 
Route::resource('helicopters','HelicopterController');