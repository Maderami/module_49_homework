<?php
require_once __DIR__ . '/../config/config.php';

// Простой роутер
$request = $_SERVER['REQUEST_URI'];
$basePath = '/';

switch ($request) {
    case $basePath:
    case $basePath . 'home':
        $controller = new MainController($twig);
        $controller->home();
        break;
    case $basePath . 'about':
        $controller = new MainController($twig);
        $controller->about();
        break;
    case $basePath . 'contacts':
        $controller = new MainController($twig);
        $controller->contacts();
        break;
    case $basePath . 'generate-image':
        $controller = new MainController($twig);
        $controller->generateImage();
        break;
    default:
        http_response_code(404);
        echo $twig->render('404.twig');
        break;
}