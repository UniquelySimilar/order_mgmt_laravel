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

// Application information route
//Route::get('/appinfo', array('as' => 'appinfo_path', 'uses' => 'HomeController@showAppInfo'));


// Authentication routes
//Route::get('/', array('as' => 'home', function () { }));

Route::get('login', array('as' => 'login_path', 'uses' => 'LoginController@login'))->before('guest');

Route::post('login', array('as' => 'authenticate_path', 'uses' => 'LoginController@authenticate'));

Route::get('logout', array('as' => 'logout_path', 'uses' => 'LoginController@logout'))->before('auth');


// Customer routes
Route::get('/', array('as' => 'root_path', function() {
	return Redirect::route('login_path');
}));

Route::get('customers', array('as' => 'customers_path', 'uses' => 'CustomerController@index'))->before('auth');

// IMPORTANT: Had to move 'show' path AFTER 'new' path as 'show' was interpretting URI segment 'new' and {id}
// and routing the 'new' request to the controller 'show' method.
Route::get('customers/new', array('as' => 'new_customer_path', 'uses' => 'CustomerController@newCustomer'))->before('auth');

Route::get('customers/{id}', array('as' => 'show_customer_path', 'uses' => 'CustomerController@show'))->before('auth');

Route::post('customers',
	array('as' => 'create_customer_path', 'before'=>'csrf', 'uses' => 'CustomerController@create'))->before('auth');

Route::get('customers/{id}/edit', array('as' => 'edit_customer_path', 'uses' => 'CustomerController@edit'))->before('auth');

Route::put('customers/{id}', array('as' => 'update_customer_path', 'uses' => 'CustomerController@update'))->before('auth');

Route::get('customers/{id}/delete', array('as' => 'delete_customer_path',
	'uses' => 'CustomerController@destroy'))->before('auth');
