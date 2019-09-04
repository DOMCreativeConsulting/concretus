<?php

namespace App\Core;

class Router
{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if($uri != "concretus/login" &&
            $uri != "concretus/recuperar-senha" &&
            $uri != "concretus/enviar-email" &&
            $uri != "concretus/atualizar-senha" &&
            $uri != "concretus/cadastrar-email"
        ){
            
            if(!isset($_SESSION) || !isset($_SESSION['logado']) || $_SESSION['logado'] != 1){
                return view('login');
            }

        }
        
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        else{
            view('404');
        }
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
    
}
