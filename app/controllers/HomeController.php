<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function rollDice()
	{
		$value = mt_rand(1,6);

		$data = array(
			'userGuess' => $guess,
			'diceRoll' => $value
			);
	}

	public function sayHello()
	{
		$data = ['name' => $name];

		return View::make('hello')->with($data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	// public function showIndex()
	// {
	// 	return View::make('index');
	// }

	public function showShow()
	{
		return View::make('show');
	}
	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showBlog()
	{
		// return View::make('index');
	}
	public function showForm()
	{
		return View::make('testform');
	}

	public function handleForm()
	{
		return Redirect::back()->withInput();
	}

	public function getLogin()
	{
		return View::make('login');
	}

		public function postLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Login Failed!');
		    return Redirect::back();
		}
	}

		public function getLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');	
	}
}
