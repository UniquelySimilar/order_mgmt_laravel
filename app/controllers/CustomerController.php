<?php

use Custom\Exceptions\ValidationException;
use Custom\Services\Validation\CustomerFormValidator;

class CustomerController extends BaseController {

	protected $_validator;

	public function __construct( CustomerFormValidator $validator ) {
		$this->_validator = $validator;
	}

	public function index() {
		//Log::info("Entered 'CustomerController@index");

		$customers = Customer::all();

		return View::make('customers.index', array('customers' => $customers));
	}

	public function show($id) {
		//Log::info("Entered 'CustomerController@show");

		$customer = Customer::find($id);

		return View::make('customers.show', array('customer' => $customer));
	}
	
	// NOTE: Since 'new' is a keyword in PHP, it cannot be used as a function name.
	public function newCustomer() {
		//Log::info("Entered 'CustomerController@newCustomer");

		return View::make('customers.new');
	}

	public function create() {
		// Validation
		$input = Input::all();

		try {
			$validate_data = $this->_validator->validate( $input );
		} catch ( ValidationException $e ) {
			return Redirect::route( 'new_customer_path' )->withInput()->withErrors( $e->get_errors() );
		}

		// Creation
		$customer = Customer::create($input);

		return Redirect::route('show_customer_path', array($customer['id']))
								->with('success', 'Customer created.');
	}

	public function edit($id) {
		$customer = Customer::find($id);

		return View::make('customers.edit', array('customer' => $customer));
	}

	public function update($id) {
		// Validation
		$input = Input::all();

		try {
			$validate_data = $this->_validator->validate( $input );
		} catch ( ValidationException $e ) {
			return Redirect::back()->withInput()->withErrors( $e->get_errors() );
		}

		$customer = Customer::find($id);

		if (!$customer->update($input)) {
				return Redirect::back()
								->with('error', 'Error while trying to update Customer')
								->withInput();
		}

		return Redirect::route('show_customer_path', array($customer['id']))
								->with('success', 'Customer updated.');
	}

	public function destroy($id) {
		Customer::destroy($id);
		
		return Redirect::route('customers_path');
	}
}
