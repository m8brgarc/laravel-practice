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

Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('calendar', 'PageController@calendar');
Route::get('contact', 'PageController@contact');
Route::post('contact', function() {
    $validator = Validator::make(Input::all(),
        array(
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:15|max:200'
        ),
        array(
            'msg.required' => 'The message field is required.',
            'msg.min' => 'The message must be at least :min characters.',
            'msg.max' => 'The message may not be greater than :max characters.'
        )
    );
    if($validator->fails()) {
        return Redirect::to('contact')->withErrors($validator)->withInput();
    } else {
        Mail::send('emails.message', Input::all(), function($message) {
            $message->from(Input::get('email'), Input::get('name'));
            $message->to('bgarcia@nxnw.net');
        });
        return Redirect::to('contact')->with('success', 'Your message has been successfully sent!');
    }
});
Route::resource('blog', 'BlogController');
Route::get('blogs', 'BlogController@index');
Route::resource('blog.comment', 'BlogCommentController');