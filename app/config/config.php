<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Настройки Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../app/views/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false, // В продакшене лучше включить кэширование
]);

// Настройки приложения
define('APP_ROOT', dirname(__DIR__));