<?php

namespace Fuel\Migrations;

class Create_facebooks
{
	public function up()
	{
		\DBUtil::create_table('facebooks', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'c_id' => array('constraint' => 11, 'type' => 'int'),
			'link_url' => array('constraint' => 100, 'type' => 'varchar'),
			'approved' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('facebooks');
	}
}