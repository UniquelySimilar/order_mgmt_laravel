<?php
class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

// Fix function call before running
		ZZZ_User::create(array(
			'email' => 'user1@example.com',
			'password' => ZZZ_Hash::make('')
		));
	}
}
