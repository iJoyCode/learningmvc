<?php namespace App\Components\Core;

class Router
{
    public static function route(Request $request)
    {
        $controllerName = '\App\Controllers\\' . $request->getController() . 'Controller';
        $method = $request->getMethod();
        $args = $request->getArgs();

        $controller = new $controllerName;

        if (!is_callable([$controller, $method]))
        {
            throw new \Exception('404 - ' . $controllerName . '->' . $request->getMethod() . ' not found');
        }

        if (!empty($args))
        {
            call_user_func_array([
                $controller,
                $method
            ], $args);
        }
        else
        {
            call_user_func([
                $controller,
                $method
            ]);
        }

        //throw new \Exception('404 - ' . $request->getController() . ' not found');
    }
}
