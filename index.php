<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');
define('DEBUG', false);

require('Components/Core/Request.php');
require('Components/Core/Router.php');
require('Components/Core/Templater.php');
require('Components/Core/BaseController.php');
require('Components/Core/BaseModel.php');
require('Components/Core/Application.php');
require('Components/Database/Database.php');

try
{
    new Application();
    Router::route(new Request());
}
catch (Exception $e)
{
    if (DEBUG)
    {
        throw $e;
    }
    else
    {
        echo "404";
    }
}