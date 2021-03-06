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

Route::get('/', function () {
    return view('welcome');
});

// Nommer une route
Route::get('/index','PostController@index');

// Route pour les blades index, edit et show
Route::get('/edit','PostController@edit');
Route::get('/show','PostController@show');