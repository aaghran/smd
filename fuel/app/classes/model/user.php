
<?php

class Model_User extends \Orm\Model {

    protected static $_properties = array(
        'id',
        'username',
        'password',
        'email',
        'fname',
        'lname',
        'role',
        'created_at',
        'updated_at',
    );
    protected static $_rules = array(
        'username' => 'required',
        'email' => 'required|valid_email',
        'fname' => 'required',
    );
    protected static $_defaults = array(
        'role' => '1',
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
    protected static $_table_name = 'users';

}
