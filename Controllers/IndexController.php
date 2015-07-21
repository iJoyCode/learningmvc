<?php namespace App\Controllers;

use App\Components\Core\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->templater->display('index/index');
    }
}