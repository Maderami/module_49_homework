<?php

namespace core\models;

class PageModel
{
    public function getHomePageData()
    {
        return [
            'features' => [
                '10 лет на рынке',
                'Более 100 довольных клиентов',
                'Индивидуальный подход'
            ],
            'contact_phone' => '+7 (123) 456-78-90',
            'contact_email' => 'info@example.com'
        ];
    }

    public function getAboutPageData()
    {
        return [
            'hardSkill' => ['PHP',
               'Javascript',
                'NGINX',
                'APACHE'],
            'softSkills' => ['Aris Express', 'PGAdmin'],
            'whoIsMe' => 'Сейчас работаю, учусь и еще раз учусь.',
        ];
    }
}