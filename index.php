<?php
require('vendor/autoload.php');

use App\Components\Core\Application;
use App\Components\Core\Request;
use App\Components\Core\Router;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

define('SITE_PATH', realpath(dirname(__FILE__)) . '/');
define('DEBUG', false);

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