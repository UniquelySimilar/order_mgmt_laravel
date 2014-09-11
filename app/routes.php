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

Route::get('/', 'HomeController@showAppInfo');

Route::get('customers', 'CustomerController@index');

Route::get('customers/new', 'CustomerController@newCustomer');

Route::post('customers/create', array('before'=>'csrf',function(){
 //form validation come here
}));

// Route::get('/', function()
// {
// 	return View::make('hello');
// });
