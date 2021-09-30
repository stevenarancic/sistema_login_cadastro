<?php

namespace App\Model;

class Conn
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=sistemalogin;charset=utf8', 'root', '');
        }

        return self::$instance;
    }
}
