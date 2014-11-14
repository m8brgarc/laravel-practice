<?php

class BlogCommentController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($blogId)
	{
		$comment = new Comment;
        $validator = Comment::validate(Input::all());
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $comment->fill(Input::all());
            $comment->blog()->associate(Blog::find($blogId))->save();
            return Redirect::route('blog.show', array('id' => $blogId))->with('msg', 'Comment Posted');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($blogId, $commentId)
	{
        Comment::destroy($commentId);
        return Redirect::back()->with('msg', 'Comment Deleted');
	}


}
