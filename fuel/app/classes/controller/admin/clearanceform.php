<?php
class Controller_Admin_Clearanceform extends Controller_Admin
{

	public function action_index()
	{
		if (Auth::get('group') == 50) {
			
			$data['clearanceforms'] = Model_Clearanceform::find('all');

			$data['clearanceforms'] = Model_Clearanceform::find('all', array(
			    'where' => array(
			        array('firstname', Auth::get('firstname')),
			        array('middlename', Auth::get('middlename')),
			        array('lastname', Auth::get('lastname')),
			    ),
			    'order_by' => array('id' => 'desc'),
			));

			$this->template->title = "Clearance forms";
			$this->template->content = View::forge('admin/clearanceform/index', $data);

		}else{
			$data['clearanceforms'] = Model_Clearanceform::find('all');
			$this->template->title = "Clearance forms";
			$this->template->content = View::forge('admin/clearanceform/index', $data);
		}

	}

	public function action_view($id = null)
	{
		$data['clearanceform'] = Model_Clearanceform::find($id);

		$this->template->title = "Clearanceform";
		$this->template->content = View::forge('admin/clearanceform/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Clearanceform::validate('create');

			if ($val->run())
			{
				
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
				
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		  $this->template->title = "Clearance forms";
		  $this->template->content = View::forge('admin/clearanceform/create');

		
		
		  
		

	}

	public function action_edit($id = null)
	{
		$clearanceform = Model_Clearanceform::find($id);
		$val = Model_Clearanceform::validate('edit');

		if ($val->run())
		{
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
			$clearanceform->contactnumber = Input::post('contactnumber');
			$clearanceform->schedule = Input::post('schedule');
			$clearanceform->payment = Input::post('payment');

			if ($clearanceform->save())
			{
				Session::set_flash('success', e('Updated clearance form #' . $id));

				Response::redirect('admin/clearanceform');
			}

			else
			{
				Session::set_flash('error', e('Could not update clearanceform #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$clearanceform->fileno = $val->validated('fileno');
				$clearanceform->orno = $val->validated('orno');
				$clearanceform->firstname = $val->validated('firstname');
				$clearanceform->middlename = $val->validated('middlename');
				$clearanceform->lastname = $val->validated('lastname');
				$clearanceform->address = $val->validated('address');
				$clearanceform->sex = $val->validated('sex');
				$clearanceform->civilstatus = $val->validated('civilstatus');
				$clearanceform->dateofbirth = $val->validated('dateofbirth');
				$clearanceform->placeofbirth = $val->validated('placeofbirth');
				$clearanceform->comtaxno = $val->validated('comtaxno');
				$clearanceform->issuedat = $val->validated('issuedat');
				$clearanceform->issuedon = $val->validated('issuedon');
				$clearanceform->purpose = $val->validated('purpose');
				$clearanceform->contactnumber = $val->validated('contactnumber');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('clearanceform', $clearanceform, false);
		}

		$this->template->title = "Clearance forms";
		$this->template->content = View::forge('admin/clearanceform/edit');

	}

	public function action_delete($id = null)
	{
		if ($clearanceform = Model_Clearanceform::find($id))
		{
			$clearanceform->delete();

			Session::set_flash('success', e('Deleted clearanceform #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete clearanceform #'.$id));
		}

		Response::redirect('admin/clearanceform');

	}

}
