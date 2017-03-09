<?php
use Orm\Model;

class Model_Clearanceform extends Model
{
	protected static $_properties = array(
		'id',
		'fileno',
		'orno',
		'firstname',
		'payment',
		'middlename',
		'lastname',
		'address',
		'sex',
		'schedule',
		'civilstatus',
		'dateofbirth',
		'placeofbirth',
		'comtaxno',
		'issuedat',
		'issuedon',
		'purpose',
		'contactnumber',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('fileno', 'Fileno', 'required|max_length[255]');
		$val->add_field('orno', 'Orno', 'required|max_length[255]');
		$val->add_field('firstname', 'Firstname', 'required|max_length[255]');
		$val->add_field('middlename', 'Middlename', 'required|max_length[255]');
		$val->add_field('lastname', 'Lastname', 'required|max_length[255]');
		$val->add_field('address', 'Address', 'required|max_length[255]');
		$val->add_field('sex', 'Sex', 'required|max_length[255]');
		$val->add_field('civilstatus', 'Civilstatus', 'required|max_length[255]');
		$val->add_field('dateofbirth', 'Dateofbirth', 'required');
		$val->add_field('placeofbirth', 'Placeofbirth', 'required|max_length[255]');
		$val->add_field('comtaxno', 'Comtaxno', 'required|max_length[255]');
		$val->add_field('issuedat', 'Issuedat', 'required|max_length[255]');
		$val->add_field('issuedon', 'Issuedon', 'required');
		$val->add_field('purpose', 'Purpose', 'required');
		$val->add_field('contactnumber', 'Contactnumber', 'required|valid_string[numeric]');

		return $val;
	}

}
