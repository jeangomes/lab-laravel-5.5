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
Route::get('/bot-skull', 'HomeController@botSkull');
Route::get('/', 'HomeController@index')->name('initial');

//Route::get('/upload', 'FileController@upload');
//Route::post('/upload', 'FileController@move');

Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/quem-somos', 'HomeController@quemSomos')->name('somos');
Route::get('/galeria', 'HomeController@galeria')->name('galeria');
Route::get('/agenda', 'EventController@index')->name('agenda');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contato', 'ContatoController@index')->name('contato');

Route::get('/evento/participar/{id}', 'EventController@create')->name('subscribe');

Route::group(['prefix' => 'admin','namespace' => 'Adm','middleware'=>'admin'], function() {
    Route::resource('evento', 'EventController');
    Route::resource('membros', 'UserController');
    Route::resource('produto', 'ProductController');
    Route::get('/home', 'HomeController@index')->name('dash');
});
Route::resource('pedido', 'PurchaseController');
Route::resource('amigo-oculto', 'AmigoOcultoController');

