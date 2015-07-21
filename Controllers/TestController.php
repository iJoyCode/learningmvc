<?php namespace App\Controllers;

use App\Components\Core\BaseController;
use App\Models\TestModel;

class TestController extends BaseController
{
    public function index()
    {
        $model = new TestModel();

        $this->templater->set('h1', $model->getTitle());
        $this->templater->display('test/test');
    }
}


