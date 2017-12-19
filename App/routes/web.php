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
//Route::get('prueba','PruebaController@index');
//Route::resource('hola','HolaController');

/*Route::get('nombre/{nombre}',function($nombre){
	return "Mi nombre es: ".$nombre;
});
*/
Route::('/','FrontController@index');
Route::('/','FrontController@contac');
Route::('/','FrontController@register');

Route::get('/', function () {
    return view('welcome');
});
