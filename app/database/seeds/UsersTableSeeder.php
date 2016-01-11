<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new User();
		$user->first_name = 'Haniyah';
		$user->last_name = 'Shaikh';
		$user->username = 'Hanu';
		$user->email = 'H@aol.com';
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->birthday = '2013-';
		$user->phone_number = '';
		$user->zipcode = '';
		$user->save();
	}

}
