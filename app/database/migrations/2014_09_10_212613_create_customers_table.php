<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('customers', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('zipcode');
			$table->string('home_phone');
			$table->string('work_phone');
			$table->string('email')->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('customers');
	}
}
