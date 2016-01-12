<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'content');

	public static $rules = array(
	    'title'      => 'required|max:100',
	    'content'       => 'required|max:10000'
	);
}