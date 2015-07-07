<?php
class ErrorController extends BaseController
{
    public function index()
    {
        header('HTTP/1.0 404 Not Found');
        $this->templater->display('errors/404');
    }
}