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
Route::get('/appinfo', array('as' => 'appinfo_path', 'uses' => 'HomeController@showAppInfo'));


// Authentication routes
//Route::get('/', array('as' => 'home', function () { }));

Route::get('login', array('as' => 'login_path', function () { }));

Route::post('login', array('as' => 'authenticate_path', function () { }));

Route::get('logout', array('as' => 'logout_path', function () { }));

Route::get('profile', array('as' => 'profile_path', function () { }));


// Customer routes
Route::get('/', array('as' => 'root_path', function() {
	return Redirect::route('customers_path');
}));

Route::get('customers', array('as' => 'customers_path', 'uses' => 'CustomerController@index'));

// IMPORTANT: Had to move 'show' path AFTER 'new' path as 'show' was interpretting URI segment 'new' and {id}
// and routing the 'new' request to the controller 'show' method.
Route::get('customers/new', array('as' => 'new_customer_path', 'uses' => 'CustomerController@newCustomer'));

Route::get('customers/{id}', array('as' => 'show_customer_path', 'uses' => 'CustomerController@show'));

Route::post('customers',
	array('as' => 'create_customer_path', 'before'=>'csrf', 'uses' => 'CustomerController@create'));

Route::get('customers/{id}/edit', array('as' => 'edit_customer_path', 'uses' => 'CustomerController@edit'));

Route::put('customers/{id}', array('as' => 'update_customer_path', 'uses' => 'CustomerController@update'));

Route::get('customers/{id}/delete', array('as' => 'delete_customer_path', 'uses' => 'CustomerController@destroy'));
