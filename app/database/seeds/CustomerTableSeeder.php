<?php
class CustomerTableSeeder extends Seeder {
	public function run() {
		DB::table('customers')->delete();

		Customer::create(array(
			'name'				=> 'customerA',
			'street'			=> '123 Main',
			'city'				=> 'Denver',
			'state'				=> 'CO',
			'zipcode'			=> '80204',
			'home_phone'	=> '303-555-1212',
			'work_phone'	=> '303-555-2345',
			'email'				=> 'customerA@example.com'
		));

		Customer::create(array(
			'name'				=> 'customerB',
			'street'			=> '123 Elm',
			'city'				=> 'Louisville',
			'state'				=> 'CO',
			'zipcode'			=> '80027',
			'home_phone'	=> '303-555-1212',
			'work_phone'	=> '303-555-2345',
			'email'				=> 'customerB@example.com'
		));

		Customer::create(array(
			'name'				=> 'customerC',
			'street'			=> '123 Broadway',
			'city'				=> 'Boulder',
			'state'				=> 'CO',
			'zipcode'			=> '80304',
			'home_phone'	=> '303-555-1212',
			'work_phone'	=> '303-555-2345',
			'email'				=> 'customerC@example.com'
		));
	}
}