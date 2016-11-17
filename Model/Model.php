<?php

class Model
{

    protected $db;

    protected $dbConfigs = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
    ];

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=test_blog", "login", "password", $this->dbConfigs);
    }
}
?>