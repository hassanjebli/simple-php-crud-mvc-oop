<?php
namespace App;

class Router
{
    private $routes = [];

    public function addRoute($method, $path, $controller, $action)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD']; 
        $action = $_GET['action'] ?? 'index'; 

        foreach ($this->routes as $route) {
            if ($route['path'] === $action && $route['method'] === $method) {
                $controller = new $route['controller']();
                call_user_func([$controller, $route['action']]);
                return;
            }
        }



        header("HTTP/1.0 404 Not Found");
        echo "<h1 style='text-align:center;font-size:60px;'>
                404 - Page not found
            </h1>";
    }

    public static function hasAction($act)
    {
        $action = $_GET['action'] ?? 'index';
        if ($action===$act) {
            return true;
        }

        return false;
    }
}