<?php
class CustomerController extends BaseController {
	public function getCustomers() {
		$customers = Customer::all();

		return View::make('customers.index', array('customers' => $customers));
	}

	public function getCustomer($id) {
		$customer = Customer::find($id);

		return View::make('customers.show', array('customer' => $customer));
	}

	public function newCustomer() {
		return View::make('customers.new');
	}

	public function createCustomer() {
		$customer = new Customer;
		$customer->name = Input::get('name');
		$customer->street = Input::get('street');
		$customer->city = Input::get('city');
		$customer->state = Input::get('state');
		$customer->zipcode = Input::get('zipcode');
		$customer->home_phone = Input::get('home_phone');
		$customer->work_phone = Input::get('work_phone');
		$customer->email = Input::get('email');

		$customer->save();
		/*
		$customers = Customer::all();

		return View::make('customers.index', array('customers' => $customers));
		*/
		return View::make('hello');
	}
}
