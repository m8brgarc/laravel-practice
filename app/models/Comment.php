<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Comment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments', $fillable = array('author', 'comment_text', 'rating', 'blog_id');

    public function blog()
    {
        return $this->belongsTo('Blog');
    }

    public static function validate($input) {
        $rules = array(
            'author' => 'required|min:4|max:50',
            'comment_text' => 'required|max:3000',
            'rating' => 'required|numeric|min:1|max:5'
        );

        return Validator::make($input, $rules);
    }
}
