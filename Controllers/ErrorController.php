<?php
class ErrorController extends BaseController
{
    public function index()
    {
        header('HTTP/1.0 404 Not Found');
        require('Views/Errors/404.html');
    }
}