<?php

/**
 * Created by PhpStorm.
 * User: mig
 * Date: 24.09.2015
 * Time: 23:00
 */
namespace Models;
class User
{
    public $name = 'Edd';
    public $token = 'token';

    public function verifyToken($token)
    {
        if ($this->token == $token) {
            return TRUE;
        }
        return FALSE;
    }
}