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

    Route::get('/catalogo', 'CatalogoController@index');
    Route::get('/catalogo/{slug}', 'CatalogoController@show');
    
    Route::get('/produto/{slug}', 'ProdutoController@index');
});
