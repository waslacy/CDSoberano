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

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::post('/', 'HomeController@contact');

    Route::get('/catalogo', 'CatalogoController@index');
    Route::get('/catalogo/{slug}', 'CatalogoController@show');

    Route::get('/contato', 'ContatoController@index');
    Route::post('/contato', 'ContatoController@contact');
});
