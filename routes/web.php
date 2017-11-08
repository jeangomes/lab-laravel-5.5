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

Route::get('/upload', 'FileController@upload');
Route::post('/upload', 'FileController@move');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('membros', 'UserController');
    //Route::get('clientes', ['as' => 'customer.index', 'uses' => 'CustomersController@index']);
    ///Route::get('cliente/{id}',['as' => 'customer.get', 'uses' => 'CustomersController@get']);
    //Route::post('cliente',['as' => 'customer.create', 'uses' => 'CustomersController@create']);
    //Route::put('cliente/{id}',['as' => 'customer.update', 'uses' => 'CustomersController@update']);
    //Route::delete('cliente/{id}',['as' => 'customer.delete', 'uses' => 'CustomersController@delete']);
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('produto', 'ProductController');
    Route::resource('evento', 'EventController');
});
