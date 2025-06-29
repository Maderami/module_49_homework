<?php
require_once __DIR__ . '/autoload.php';


// Для пространства имен core
Autoload::addNamespace('core', __DIR__ . '/core');
// Для пространства имен core\config
Autoload::addNamespace('core\config', __DIR__ . '/core/config');

// Для пространства имен core\controllers
Autoload::addNamespace('core\controllers', __DIR__ . '/core/controllers');

// Для пространства имен core\models
Autoload::addNamespace('core\models', __DIR__ . '/core/models');

Autoload::register();
use core\config\Config;
use core\Route;

session_start();
//// Создаем загрузчик шаблонов
$twig = (new Config)->getConfig();

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
    case '/home':
    $routeMain = new Route('MainController', 'index', 'Page');
    $routeMain->run($twig);
        break;
    case '/about':
        $routeAbout = new Route('MainController', 'about', 'Page');
        $routeAbout->run($twig);
        break;
    case '/contacts':
        $routeContacts = new Route('MainController', 'contacts', 'Contacts');
        $routeContacts->run($twig);
        break;
    case '/generateimage':
        $routeContacts = new Route('MainController', 'generateImage', 'Page');
        $routeContacts->run($twig);
        break;
    case '/phpinfo':
        $routeContacts = new Route('MainController', 'phpinfo', 'Page');
        $routeContacts->run($twig);
        break;
    default:
        http_response_code(404);
        echo $request;//$twig->render(__DIR__ . '/core/views/templates/error/404.twig' , ['title' => 'Страница не найдена']);
        break;
}