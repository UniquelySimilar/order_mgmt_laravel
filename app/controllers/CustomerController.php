<?php
class CustomerController extends BaseController {
		public function index()
		{
				$customers = Customer::all();

				return View::make('customers.index', array('customers' => $customers));
		}
}