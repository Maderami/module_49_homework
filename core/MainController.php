<?php
namespace core;

class MainController {
    private $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function indexAction() {
        echo $this->twig->render('main.twig', [
            'title' => 'Главная страница',
            'welcome' => 'Добро пожаловать на наш сайт!'
        ]);

    }

    public function aboutAction() {
        echo $this->twig->render('about.twig', [
            'title' => 'О нас',
            'about_text' => 'Мы - небольшая компания, занимающаяся созданием сайтов-визиток.'
        ]);
    }

    public function contactsAction() {
        echo $this->twig->render('contacts.twig', [
            'title' => 'Контакты',
            'email' => 'contact@example.com',
            'phone' => '+7 (123) 456-78-90'
        ]);
    }
    public function generateImageAction() {
        // Создаем изображение
        $image = imagecreatetruecolor(200, 100);
        $bgColor = imagecolorallocate($image, 255, 255, 255);
        $textColor = imagecolorallocate($image, 0, 0, 0);

        imagefill($image, 0, 0, $bgColor);
        imagestring($image, 5, 50, 40, 'Сайт-визитка', $textColor);

        // Отправляем заголовки и выводим изображение
        header('Content-Type: image/png');
        imagepng($image);
        imagedestroy($image);
    }
}