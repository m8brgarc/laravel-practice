<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private $data = array();

	public function index()
	{
        if(Input::has('page')) {
            Session::put('page', Input::get('page'));
        }
        $this->data['title'] = 'Blog - All Posts';
        $this->data['blogs'] = Blog::orderBy('updated_at', 'DESC')->paginate(15);
        $this->data['msg'] = Session::get('msg');
		return View::make('blog.index', $this->data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->data['page'] = Session::get('page', 1);
        $this->data['id'] = Input::has('id') ? Input::get('id') : 1;
        $this->data['title'] = 'Create New Post';
        return View::make('blog.create', $this->data);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$blog = new Blog;
        $validator = $blog->validate(Input::all());

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $blog->fill(Input::all())->save();
            Session::forget('page');
            return Redirect::route('blog.show', array('id' => $blog->id))->with('msg', 'Post Created');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $this->data['page'] = Session::get('page', 1);
        $this->data['blog'] = Blog::find($id);
        $this->data['comments'] = $this->data['blog']->comments()->get()->sortBy('updated_at')->take(6);
        $this->data['title'] = 'Blog Post - ' . $this->data['blog']->title;
        $this->data['msg'] = Session::get('msg');
		return View::make('blog.show', $this->data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $this->data['page'] = Session::get('page', 1);
		$this->data['blog'] = Blog::find($id);
        $this->data['title'] = 'Edit Post - '. $this->data['blog']->title;
        return View::make('blog.edit', $this->data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        $blog = Blog::find($id);

        $validator = $blog->validate(Input::all());

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $blog->fill(Input::all())->save();
            Session::forget('page');
            return Redirect::route('blog.show', array('id' => $id))->with('msg', 'Post Updated');
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Blog::destroy($id);
        return Redirect::back()->with('msg', 'Post Deleted');
	}


}
