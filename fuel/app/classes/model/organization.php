
<?php

class Model_Organization extends \Orm\Model {

    protected static $_properties = array(
        'id',
        'name',
        'description',
        'link',
        'created_at',
        'updated_at',
        'org_id',
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
    protected static $_table_name = 'organizations';

    public static function get_links() {
        $query = DB::select('*')
                ->from('organizations')
                ->join('facebooks', 'inner')
                ->on('organizations.id', '=', 'facebooks.c_id') // chair belongs to a table
                ->join('twitters', 'inner')
                ->on('organizations.id', '=', 'twitters.c_id')
                ->join('googleplus', 'inner')
                ->on('organizations.id', '=', 'googleplus.c_id')
                ->join('linkedins', 'inner')
                ->on('organizations.id', '=', 'linkedins.c_id'); // person belongs to a chair

        return DB::query($query)->execute()->as_array();
    }

    public static function get_views($id) {
        $query = DB::select('*')
                ->from('organizations')
                ->join('facebooks', 'inner')
                ->on('organizations.id', '=', 'facebooks.c_id') // chair belongs to a table
                ->join('twitters', 'inner')
                ->on('organizations.id', '=', 'twitters.c_id')
                ->join('googleplus', 'inner')
                ->on('organizations.id', '=', 'googleplus.c_id')
                ->join('linkedins', 'inner')
                ->on('organizations.id', '=', 'linkedins.c_id') // person belongs to a chair
                ->where("organizations.id", $id);
        return DB::query($query)->execute()->as_array();
    }

}
