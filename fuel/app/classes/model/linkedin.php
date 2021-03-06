
<?php

class Model_Linkedin extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'c_id',
		'linkedin_url',
		'approved',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'linkedins';

}
