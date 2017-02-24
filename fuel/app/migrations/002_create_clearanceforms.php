<?php

namespace Fuel\Migrations;

class Create_clearanceforms
{
	public function up()
	{
		\DBUtil::create_table('clearanceforms', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'fileno' => array('constraint' => 255, 'type' => 'varchar'),
			'orno' => array('constraint' => 255, 'type' => 'varchar'),
			'firstname' => array('constraint' => 255, 'type' => 'varchar'),
			'middlename' => array('constraint' => 255, 'type' => 'varchar'),
			'lastname' => array('constraint' => 255, 'type' => 'varchar'),
			'address' => array('constraint' => 255, 'type' => 'varchar'),
			'sex' => array('constraint' => 255, 'type' => 'varchar'),
			'civilstatus' => array('constraint' => 255, 'type' => 'varchar'),
			'dateofbirth' => array('type' => 'date'),
			'placeofbirth' => array('constraint' => 255, 'type' => 'varchar'),
			'comtaxno' => array('constraint' => 255, 'type' => 'varchar'),
			'issuedat' => array('constraint' => 255, 'type' => 'varchar'),
			'issuedon' => array('type' => 'date'),
			'purpose' => array('type' => 'text'),
			'contactnumber' => array('constraint' => 12, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clearanceforms');
	}
}