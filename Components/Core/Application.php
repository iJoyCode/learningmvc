<?php

class Application
{
    static $config;

    function __construct()
    {
        self::$config = require(SITE_PATH . 'Config/config.php');
    }
}
