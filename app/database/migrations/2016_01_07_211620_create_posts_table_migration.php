<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTableMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			// $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users');
			$table->string('title', 240);
			$table->text('content');
			// $table->date('date');
			// $table->string('image', 240);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table){
			$table->dropForeign('posts_user_id_foreign');
		});
		Schema::drop('posts');
	}

}
