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
    //return view('up');
        // LISTAR CUSTOMER
    return view('welcome');
    //$customers = App\Customer::paginate(5);
    //dd($customers->toArray());
    //echo $customers->render();
    // CRIAR NOVO CUSTOMER
    //$customers = new App\Customer();
//    $data = [
//    'name' => 'Joaquim',
//    'city' => 'Divino',
//    'state' => 'MG',
//    'special_customer' => true,
//    'birth_date' => '2000-09-23'
//    ];
//    $customer = App\Customer::create($data);
//
//    dd($customer->toArray());
    // TRAZER CUSTOMER ID 2
//    $data = [
//        'name' => 'Joaquim José',
//        'birth_date' => '1987-09-23'
//    ];
//    $customer = App\Customer::find(7);
    //dd($customer->birth_date);   
    //$customer->save();
    //$customer->update($data);
    //$customer = App\Customer::destroy(7);
    //dd($customer);
});

Route::get('/upload', 'FileController@upload');
Route::post('/upload', 'FileController@move');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::resource('clientes', 'CustomersController');
    //Route::get('clientes', ['as' => 'customer.index', 'uses' => 'CustomersController@index']);
    ///Route::get('cliente/{id}',['as' => 'customer.get', 'uses' => 'CustomersController@get']);
    //Route::post('cliente',['as' => 'customer.create', 'uses' => 'CustomersController@create']);
    //Route::put('cliente/{id}',['as' => 'customer.update', 'uses' => 'CustomersController@update']);
    //Route::delete('cliente/{id}',['as' => 'customer.delete', 'uses' => 'CustomersController@delete']);
});
