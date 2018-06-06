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
Route::get('/', 'HomeController@index')->name('initial');

//Route::get('/upload', 'FileController@upload');
//Route::post('/upload', 'FileController@move');

Auth::routes();
Route::get('/home', 'HomeController@home')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace' => 'Adm'], function() {
    Route::resource('evento', 'EventController');
    Route::resource('membros', 'UserController');
    Route::resource('produto', 'ProductController');
    Route::get('/home', 'HomeController@index')->name('dash');
});
Route::resource('pedido', 'PurchaseController');
Route::resource('amigo-oculto', 'AmigoOcultoController');

