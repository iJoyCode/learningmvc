<?php
require('Models/TestModel.php');

class TestController extends BaseController
{
    public function index()
    {
        $model = new TestModel();
        $h1 = $model->getTitle();

        require('Views/Test/test.html');
    }
}


