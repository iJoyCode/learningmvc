<?php

class IndexController extends BaseController
{
    public function index()
    {
        $this->templater->display('index/index');
    }
}