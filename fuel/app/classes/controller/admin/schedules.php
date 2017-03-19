<?php

class Controller_Admin_Schedules extends Controller_Admin
{

	public function action_getschedules()
	{
		$data['clearanceforms'] = Model_Clearanceform::find('all', array(
		    'group_by' => array('schedule'),
		));

		$this->template->title = 'Schedules &raquo; Getschedules';
		$this->template->content = View::forge('admin/schedules/getschedules', $data);
	}

}
