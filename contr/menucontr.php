<?php
include_once dirname(__DIR__)."/config/db.php";
include_once dirname(__DIR__)."/models/menu.php";
class menucontr {
    public $model;
    public function __construct() {
        $database = new database();
        $db=$database->connect();
        $this->model = new menu($db);
    }
}
?>