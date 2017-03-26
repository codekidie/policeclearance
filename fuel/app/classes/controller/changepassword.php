<?php

class Controller_Changepassword extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Changepassword &raquo; Index';
		$this->template->content = View::forge('changepassword/index', $data);
	}

}
