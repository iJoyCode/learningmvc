<?php namespace App\Components\Core;

use App\Components\Database\Database;

abstract class BaseModel
{
    protected $db;

    public function __construct()
    {
        $config = Application::$config;

        $this->db = new Database(
            $config['db']['host'],
            $config['db']['username'],
            $config['db']['password'],
            $config['db']['database'],
            $config['db']['port'],
            $config['db']['charset']
        );
    }
}
