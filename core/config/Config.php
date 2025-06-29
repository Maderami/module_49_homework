<?php

namespace core\config;

require_once __DIR__ . '/../../vendor/autoload.php';

class Config
{
    public static function getConfig(): \Twig\Environment
    {
        // Настройки Twig
        $loader = new \Twig\Loader\FilesystemLoader([
            __DIR__ . '/../views/templates'
        ]);
        $twig = new \Twig\Environment($loader, [
            'cache' => false,
            'debug' => true
        ]);
        define('APP_ROOT', dirname(__DIR__, 2));
        return $twig;
    }
}
