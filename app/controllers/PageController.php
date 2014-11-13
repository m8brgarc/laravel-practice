<?php

class PageController extends BaseController {
    private $data;

	public function index()
	{
        $this->data['title'] = 'Home';
		return View::make('page.index', $this->data);
	}

    public function about()
    {
        $this->data['title'] = 'About';
        return View::make('page.about', $this->data);
    }

    public function calendar()
    {
        $this->data['title'] = 'Calendar';
        return View::make('page.calendar', $this->data);
    }

    public function contact()
    {
        $this->data['title'] = 'Contact Us';
        return View::make('page.contact', $this->data);
    }

}
