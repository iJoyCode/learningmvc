<?php namespace App\Components\Core;

abstract class BaseController
{
    protected $templater;

    public function __construct()
    {
        $this->templater = new Templater(SITE_PATH . 'Views');
        $this->templater->setLayout('layouts/main');
        $this->templater->set('title', 'My Favorite Title');
    }

    abstract public function index();
}
