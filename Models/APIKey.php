<?php
/**
 * Created by PhpStorm.
 * User: mig
 * Date: 24.09.2015
 * Time: 23:07
 */

namespace Models;


class APIKey
{
    public $apiKey = 'key';

    public function verifyKey($apiKey, $origin)
    {
        if ($this->apiKey == $apiKey) {
            return TRUE;
        }
        return FALSE;
    }
}