<?php

namespace core\models;

class ContactModel
{

    public function getContactInfo()
    {
        return [
            'address' => 'г. Москва, ул. Примерная, д. 1',
            'phone' => '+7 (123) 456-78-90',
            'email' => 'info@example.com',
        ];
    }

}