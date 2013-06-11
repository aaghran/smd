<?php

class Controller_Pages extends Controller_Template
{

	public function action_index()
	{
		$view= Model_Organization::find('all');
		$this->template->title = 'Home ';
		$this->template->content = View::forge('pages/index', $view);
		
	}

	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		$this->template->title = 'Home &raquo; View all';
		$this->template->content = View::forge('pages/view', $data);
	}

	public function action_insert()
	{
		$data["subnav"] = array('insert'=> 'active' );
		$this->template->title = 'Pages &raquo; Insert';
		$this->template->content = View::forge('pages/insert', $data);
	}

	public function action_about()
	{
		$data["subnav"] = array('about'=> 'active' );
		$this->template->title = 'Pages &raquo; About';
		$this->template->content = View::forge('pages/about', $data);
	}

	public function action_contact()
	{
		$data["subnav"] = array('contact'=> 'active' );
		$this->template->title = 'Pages &raquo; Contact';
		$this->template->content = View::forge('pages/contact', $data);
	}

}
