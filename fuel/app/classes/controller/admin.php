<?php

class Controller_Admin extends Controller_Base
{
	public $template = 'admin/template';

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_Admin' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				$admin_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 100;
				// if ( ! Auth::member($admin_group_id) && ! Auth::member(50))
				// {
				// 	Session::set_flash('error', e('You don\'t have access to the admin panel'));
				// 	Response::redirect('/');
				// }
			}
			else
			{
				Response::redirect('/');
			}
		}
	}

	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('admin');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'Email or Username')
			    ->add_rule('required');
			$val->add('password', 'Password')
			    ->add_rule('required');

			if ($val->run())
			{
				if ( ! Auth::check())
				{
					if (Auth::login(Input::post('email'), Input::post('password')))
					{
						// assign the user id that lasted updated this record
						foreach (\Auth::verified() as $driver)
						{
							if (($id = $driver->get_user_id()) !== false)
							{
								if (Auth::get('group') == 50) {
									// credentials ok, go right in
									$current_user = Model\Auth_User::find($id[1]);
									Session::set_flash('success', e('Welcome, '.$current_user->username));
									Response::redirect('admin');
								}else if(Auth::get('group') == 100)
								{
									// credentials ok, go right in
									$current_user = Model\Auth_User::find($id[1]);
									Session::set_flash('success', e('Welcome, '.$current_user->username));
									Response::redirect('admin/clearanceform');
								}
								
							}
						}
					}
					else
					{
						$this->template->set_global('login_error', 'Username or password mismatch!');
					}
				}
				else
				{
					$this->template->set_global('login_error', 'Already logged in!');
				}
			}
		}

		$this->template->title = 'Login';
		$this->template->content = View::forge('admin/login', array('val' => $val), false);
	}

	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('admin');
	}

	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		if (Input::method() == 'POST')
		{
				if (!empty(Input::post('id'))) {
					$clearanceform = Model_Clearanceform::find(Input::post('id'));
					$clearanceform->fileno = Input::post('fileno');
					$clearanceform->orno = Input::post('orno');
					$clearanceform->firstname = Input::post('firstname');
					$clearanceform->middlename = Input::post('middlename');
					$clearanceform->lastname = Input::post('lastname');
					$clearanceform->address = Input::post('address');
					$clearanceform->sex = Input::post('sex');
					$clearanceform->civilstatus = Input::post('civilstatus');
					$clearanceform->dateofbirth = Input::post('dateofbirth');
					$clearanceform->placeofbirth = Input::post('placeofbirth');
					$clearanceform->comtaxno = Input::post('comtaxno');
					$clearanceform->issuedat = Input::post('issuedat');
					$clearanceform->issuedon = Input::post('issuedon');
					$clearanceform->purpose = Input::post('purpose');
					$clearanceform->payment = Input::post('payment');
					$clearanceform->schedule = Input::post('schedule');
					$clearanceform->contactnumber = Input::post('contactnumber');

					if ($clearanceform->save())
					{
						Session::set_flash('success', e('Application Updated Success'));
						Response::redirect('admin/clearanceform/create');
					}

					else
					{
						Session::set_flash('success', e('Application could not be updated!'));
						Response::redirect('admin/clearanceform/create');
					}

				}else{
					    $clearanceform = Model_Clearanceform::forge(array(
							'fileno' => Input::post('fileno'),
							'orno' => Input::post('orno'),
							'firstname' => Input::post('firstname'),
							'middlename' => Input::post('middlename'),
							'lastname' => Input::post('lastname'),
							'address' => Input::post('address'),
							'sex' => Input::post('sex'),
							'civilstatus' => Input::post('civilstatus'),
							'dateofbirth' => Input::post('dateofbirth'),
							'placeofbirth' => Input::post('placeofbirth'),
							'comtaxno' => Input::post('comtaxno'),
							'issuedat' => Input::post('issuedat'),
							'issuedon' => Input::post('issuedon'),
							'schedule' => Input::post('schedule'),
							'payment' => Input::post('payment'),
							'purpose' => Input::post('purpose'),
							'contactnumber' => Input::post('contactnumber'),
						));

						if ($clearanceform and $clearanceform->save())
						{
							if (Auth::get('group') == 100) {
								Session::set_flash('success', e('Added clearance form #'.$clearanceform->id.'.'));
								Response::redirect('admin/clearanceform');
							}else if (Auth::get('group') == 50) {
								Session::set_flash('success', e('Application Successfully Submitted'));
								Response::redirect('admin/clearanceform/create');
							}
							
						}

						else
						{
							Session::set_flash('error', e('Could not save clearanceform.'));
						}
					}
		}
				
		$this->template->title = 'Dashboard';
		$this->template->content = View::forge('admin/clearanceform/create');
	}

}

/* End of file admin.php */
