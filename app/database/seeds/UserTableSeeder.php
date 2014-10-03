<?php
class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		User::create(array(
			'email' => 'user1@example.com',
			'password' => Hash::make('123qwe')
		));
	}
}
