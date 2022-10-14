<?php

use App\Http\Controllers\AdminController;
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
    Route::get('/login', 'UserController@index');
    Route::post('/auth', 'UserController@auth');
    
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::post('/', 'HomeController@contact');

    Route::get('/catalogo', 'CatalogoController@index');
    Route::get('/catalogo/{cat}', 'CatalogoController@show');
    Route::post('/catalogo/{cat}/filtro', 'CatalogoController@showFilteredProducts');

    Route::get('/orcamento', 'OrcamentoController@index');
    Route::post('/orcamento', 'OrcamentoController@orcamento');

    Route::get('/admin', 'AdminController@index');

    Route::get('/admin/edit/{cat}', 'AdminController@showEditCategory');
    Route::post('/admin/edit/{cat}', 'AdminController@editCategory');
    Route::get('/admin/remove/{cat}', 'AdminController@removeCategory');

    Route::get('/admin/testimonial/{testi}', 'AdminController@showEditTestimonial');
    Route::post('/admin/testimonial/{testi}', 'AdminController@editTestimonial');
    Route::get('/admin/testimonial/remove/{testi}', 'AdminController@removeTestimonial');

    Route::get('/admin/{cat}', 'AdminCOntroller@listProducts');
    Route::get('/admin/{cat}/edit/{prod}', 'AdminController@showEditProduct');
    Route::post('/admin/{cat}/edit/{prod}', 'AdminController@editProduct');
    Route::get('/admin/{cat}/remove/{prod}', 'AdminController@removeProduct');
});
