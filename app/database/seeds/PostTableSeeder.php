<?php

class PostTableSeeder extends Seeder {
	public function run()
	{
		$user = User::firstOrFail();


		$post1 = new Post;
		$post1->title = "Title 1";
		$post1->content = "Content 1";
		$post1->user_id = $user->id;
		$post1->save();

		$post2 = new Post;
		$post2->title = "Title 2";
		$post2->content = "Content 2";
		$post2->user_id = $user->id;
		$post2->save();

		$post3 = new Post;
		$post3->title = "Title 3";
		$post3->content = "Content 3";
		$post3->user_id = $user->id;
		$post3->save();

		$post4 = new Post;
		$post4->title = "Title 4";
		$post4->content = "Content 4";
		$post4->user_id = $user->id;
		$post4->save();

		$post5 = new Post;
		$post5->title = "Title 5";
		$post5->content = "Content 5";
		$post5->user_id = $user->id;
		$post5->save();

	}
}