<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function ($table)
		{
			$table->increments('id');
			$table->string('username', 50);
			$table->string('email', 100);
			$table->string('fullname', 100);
			
			$table->string('password', 60); // Laravel\Hash by default generate 60 char hash

			// add timestamp created_at and updated_at
			$table->timestamps();

			// ensure username is unique
			$table->unique('username');

			// ensure email address is unique
			$table->unique('email');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}