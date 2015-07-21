<?php namespace App\Controllers;

use App\Components\Core\BaseController;

class ErrorController extends BaseController
{
    public function index()
    {
        header('HTTP/1.0 404 Not Found');
        $this->templater->display('errors/404');
    }
}