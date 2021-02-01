<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/','somos');
//Route::view('admin','admin');
Route::view('adoptar','adoptar');
Route::view('ingresar','ingresar');
Route::view('somos','somos');
Route::view('noticias','noticias');

//Route::get('/adopciones','App\Http\Controllers\userController@getRecursos');
Route::resource('admin','App\Http\Controllers\userController');
Route::resource('adopciones','App\Http\Controllers\AdopcionesController');





