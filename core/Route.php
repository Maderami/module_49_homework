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
        $controllerName =  $this->getController();
        $actionName =  $this->getAction() . 'Action';
        // подцепляем файл с классом контроллера
        $controllerFile = $controllerName . '.php';
        $controllerPath = __DIR__ . '/' . $controllerFile;
        // получаем имя контроллера

        if(file_exists($controllerPath))
        {
            include $controllerPath;
        }
        else
        {
            Route::ErrorPage404();
        }
        // создаем контроллер
        $controller = new MainController($twig);
        $action = $actionName;
        if(method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        }
        else
        {
            Route::ErrorPage404();
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