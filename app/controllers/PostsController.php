<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except'=> array('index', 'show')));
	}

	public function index()
	{
		$query = Post::with('user');

		if (Input::has('search')) {
			$search = Input::get('search');
		$query->where('title', 'like', "%$search%");
		$query->orWhere('content', 'like', "%$search%");

		// $query->whereHas('user', function($q){
		// 	$q->where('email', 'like', '%codeup%');
		// });
		}
		$posts = $query->orderBy('created_at', 'desc')->paginate(4);
		$data = array(
		'posts' => $posts
		);
		return View::make('posts.index')->with($data);
	}

	public function create()
	{
		return View::make('posts.create');
	}

	public function store()
	{
		$post = new Post();

		Log::info('This is some useful information.');

		return $this->validateAndSave($post);
	}

	public function show($id)
	{
		$post = Post::find($id);

		if(!$post){
			Session::flash('errorMessage', 'This does not exist');
			return Redirect::action('PostsController@index');
		}

		return View::make('posts.show')->with('post', $post);
	}

	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit')->with('post', $post);	
	}

	public function update($id)
	{
		$post = Post::find($id);

		if(!$post){
			Session::flash('errorMessage', 'The post did not update');
		} else {
			Session::flash('successMessage', 'The post updated successfully');
		}

		return $this->validateAndSave($post);
		
	}

	public function validateAndSave($post)
	{
	    $validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->user_id = Auth::id();

			$userEmail = Auth::user()->email;

			$result = $post->save();

			if($result) {
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput();
			}
		}

	}
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();

		if(!$post){
			Session::flash('errorMessage', 'The post did not delete');
		} else {
			Session::flash('successMessage', 'The post deleted successfully');
		}

		return Redirect::action('posts.index');
	}

}
