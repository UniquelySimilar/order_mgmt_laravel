<?php
class CustomerController extends BaseController {

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
		$customer = new Customer;
		$customer->name = Input::get('name');
		$customer->street = Input::get('street');
		$customer->city = Input::get('city');
		$customer->state = Input::get('state');
		$customer->zipcode = Input::get('zipcode');
		$customer->home_phone = Input::get('home_phone');
		$customer->work_phone = Input::get('work_phone');
		$customer->email = Input::get('email');

		if (!$customer->save()) {
				return Redirect::back()
								->with('error', 'Error while trying to create Customer')
								->withInput();
		}

		return Redirect::route('show_customer_path', array($customer['id']))
								->with('success', 'Customer created.');
	}

	public function edit($id) {
		$customer = Customer::find($id);

		return View::make('customers.edit', array('customer' => $customer));
	}

	public function update($id) {
		$customer = Customer::find($id);

		if (!$customer->update(Input::all())) {
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
