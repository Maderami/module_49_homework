<?php
require_once __DIR__ . '/../../vendor/autoload.php';

// Настройки Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
    'debug' => true
]);

// Базовые настройки
define('APP_ROOT', dirname(__DIR__, 2));