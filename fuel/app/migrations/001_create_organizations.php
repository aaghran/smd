<?php

namespace Fuel\Migrations;

class Create_organizations
{
	public function up()
	{
		\DBUtil::create_table('organizations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 25, 'type' => 'varchar'),
			'description' => array('constraint' => 250, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('organizations');
	}
}