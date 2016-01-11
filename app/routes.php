<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('/hello/{name?}','HomeController@sayHello');

Route::get('/rolldice/{guess}', 'HomeController@rolleDile');

Route::resource('/posts', 'PostsController');

Route::get('orm-test', function()
{
	// $post1 = new Post();
	// $post1->user_id = 1;
	// $post1->title = 'Eloquent is awesome!';
	// $post1->content  = 'It is super easy to create a new post.';
	// $post1->date = date('Y-m-d');
	// $post1->image = '/img/h.jpg';
	// $post1->save();

	$post = Post::find(1);
	return $post;

	// $post2 = new Post();
	// $post2->title = 'Post number two';
	// $post2->content  = 'The body for post number two.';
	// $post2->save();
});

