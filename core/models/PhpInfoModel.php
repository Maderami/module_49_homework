<?php

namespace core\models;

class PhpInfoModel
{
    public function getPhpInfo()
    {
        return phpinfo();
    }
}