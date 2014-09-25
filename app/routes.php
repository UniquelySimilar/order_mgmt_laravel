<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/appinfo', array('as' => 'appinfo_path', 'uses' => 'HomeController@showAppInfo'));

Route::get('/', array('as' => 'root_path', function() {
	return Redirect::route('customers_path');
}));

Route::get('customers', array('as' => 'customers_path', 'uses' => 'CustomerController@index'));

Route::get('customers/new', array('as' => 'new_customer_path', 'uses' => 'CustomerController@newCustomer'));

Route::post('customers/create',
	array('as' => 'create_customer_path', 'before'=>'csrf', 'uses' => 'CustomerController@createCustomer'));
