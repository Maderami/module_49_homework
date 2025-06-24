<?php

namespace core;

class Route
{
    private $controller;
    private $action;
    private $model;

    public function __construct($controller, $action, $model) {
        $this->controller = $controller;
        $this->action = $action;
        $this->model = $model;
    }

    private function getController(){
        return $this->controller;
    }
    private function getAction(){
        return $this->action;
    }
    private function getModel(){
        return $this->model;
    }
    public function run($twig)
    {
        // контроллер и действие по умолчанию
        $routes = $_GET['url'];

        // получаем имя контроллера
        if (!empty($routes)) {
            $controllerName =  $this->getController() . 'Controller';
            $actionName =  $this->getAction() . 'Action';
            // подцепляем файл с классом контроллера
            $controllerFile = $controllerName . '.php';
            $controllerPath = __DIR__ . '/' . $controllerFile;
            if (file_exists($controllerPath)) {
                include  $controllerPath;
                echo true;
            } else {
                Route::ErrorPage404();
            }
            $controller = new $controllerName($twig);
                // вызываем действие контроллера
            $controller->$actionName();
        }





    }

    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}