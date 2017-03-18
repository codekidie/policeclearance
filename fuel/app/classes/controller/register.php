<?php
class Controller_Register extends Controller_Template
{

	public function action_index()
	{
		$data['registers'] = Model_Register::find('all');
		$this->template->title = "Registers";
		$this->template->content = View::forge('register/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('register');

		if ( ! $data['register'] = Model_Register::find($id))
		{
			Session::set_flash('error', 'Could not find register #'.$id);
			Response::redirect('register');
		}

		$this->template->title = "Register";
		$this->template->content = View::forge('register/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			
		    	$filename = '';

				$register = Auth::create_user(
				    Input::post('username'),
				    Input::post('password'),
				    Input::post('email'),
				    50,
				    array(
				        'firstname' => Input::post('firstname'),
				        'middlename' => Input::post('middlename'),
				        'lastname' => Input::post('lastname'),
				        'filename' => $filename,
				    )
				);

				if ($register)
				{
					
					Session::set_flash('success', 'Registration Successful');
				}
				else
				{
					Session::set_flash('error', 'Could not save register.');
				}
		}		
					
					
		$this->template->title = "Register";
		$this->template->content = View::forge('register/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('register');

		if ( ! $register = Model_Register::find($id))
		{
			Session::set_flash('error', 'Could not find register #'.$id);
			Response::redirect('register');
		}

		$val = Model_Register::validate('edit');

		if ($val->run())
		{
			$register->username = Input::post('username');
			$register->password = Input::post('password');
			$register->group = Input::post('group');
			$register->email = Input::post('email');
			$register->last_login = Input::post('last_login');
			$register->login_hash = Input::post('login_hash');
			$register->profile_fields = Input::post('profile_fields');

			if ($register->save())
			{
				Session::set_flash('success', 'Updated register #' . $id);

				Response::redirect('register');
			}

			else
			{
				Session::set_flash('error', 'Could not update register #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$register->username = $val->validated('username');
				$register->password = $val->validated('password');
				$register->group = $val->validated('group');
				$register->email = $val->validated('email');
				$register->last_login = $val->validated('last_login');
				$register->login_hash = $val->validated('login_hash');
				$register->profile_fields = $val->validated('profile_fields');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('register', $register, false);
		}

		$this->template->title = "Registers";
		$this->template->content = View::forge('register/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('register');

		if ($register = Model_Register::find($id))
		{
			$register->delete();

			Session::set_flash('success', 'Deleted register #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete register #'.$id);
		}

		Response::redirect('register');

	}

}
