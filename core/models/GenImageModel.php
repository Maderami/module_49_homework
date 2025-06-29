<?php

namespace core\models;

class GenImageModel
{
    public function generateImageAction() {
        // Создаем изображение
        $image = imagecreatetruecolor(200, 100);
        $bgColor = imagecolorallocate($image, 255, 255, 255);
        $textColor = imagecolorallocate($image, 0, 0, 0);

        imagefill($image, 0, 0, $bgColor);
        imagestring($image, 5, 50, 40, 'Сайт-визитка', $textColor);

        header('Content-Type: image/png');

        return imagepng($image);
    }
}