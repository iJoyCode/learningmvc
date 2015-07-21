<?php namespace App\Components\Core;

class Request
{
    private $_controller;
    private $_method;
    private $_args;

    public function __construct()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        $parts = array_filter($parts);

        $this->_controller = ucfirst(($c = array_shift($parts)) ? $c : 'index');
        $this->_method = ($c = array_shift($parts)) ? $c : 'index';
        $this->_args = (isset($parts[0])) ? $parts : [];
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function getArgs()
    {
        return $this->_args;
    }
}