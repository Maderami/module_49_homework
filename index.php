<?php
require_once __DIR__ . '/core/config/config.php';
require_once __DIR__ . '/core/Route.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;



$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//// Создаем загрузчик шаблонов
$loader = new FilesystemLoader(__DIR__ . '/core/views/templates');

// Создаем среду Twig
$twig = new Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true,
    'debug' => true
]);

switch ($request) {
    case '/':
    case '/home':
    $routeMain = new core\Route('MainController', 'index', '');
    $routeMain::run($twig);
        break;
    case '/about':
        $routeAbout = new core\Route('MainController', 'about', '');
        $routeAbout::run($twig);
        break;
    case '/contacts':
        $routeContacts = new core\Route('MainController', 'contacts', '');
        $routeContacts::run($twig);
        break;
    default:
        http_response_code(404);
        echo $twig->render('404.twig', ['title' => 'Страница не найдена']);
        break;
}