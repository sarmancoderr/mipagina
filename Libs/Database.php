<?php
namespace Libs;

use Illuminate\Database\Capsule\Manager as Capsule;
use \Pixie\Connection as DBConnection;
use \Pixie\QueryBuilder\QueryBuilderHandler;

class Database extends QueryBuilderHandler {

    public function __construct() {
        $conn = new DBConnection("mysql", [
            "host" => "localhost",
            "database" => "wordpress",
            "username" => "root",
            "password" => ""
        ]);
        parent::__construct($conn);
    }

    function table($tables)
    {
        return parent::table($tables);
    }

}