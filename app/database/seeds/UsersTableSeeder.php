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
		$user->first_name = 'Sakib';
		$user->last_name = 'Shaikh';
		$user->username = 'sshaikh210';
		$user->email = 'S@aol.com';
		$user->password = $_ENV['USER_PASS'];
		$user->birthday = '2013-09-02';
		$user->phone_number = '2107236274';
		$user->zipcode = '78015';
		$user->save();
	}

}
