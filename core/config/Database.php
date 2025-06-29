<?php

namespace Core\Config;

class Database
{

    public function getDBConfig(): array
    {
        return ['host' => 'localhost',
            'dbname' => 'website_db',
            'port' => '5436',
            'username' => 'root',
            'password' => 'postgres',
            'charset' => 'utf8mb4'];
    }

}
