<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Blog extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'blogs', $fillable = array('title', 'author', 'content');

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function validate($input) {
        $rules = array(
            'title' => 'required|min:5|max:50',
            'author' => 'required|min:4|max:50',
            'content' => 'required|max:32000'
        );

        return Validator::make($input, $rules);
    }
}
