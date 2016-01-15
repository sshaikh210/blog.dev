<?php
use Carbon\Carbon;

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('title', 'content');

	public static $rules = array(
	    'title'      => 'required|min: 5|max:100',
	    'content'       => 'required|max:1000000'
	);

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function user()
	{
	    return $this->belongsTo('User');
	}

	public function categories()
	{
		return $this->belongToMany('categories');
	}
}