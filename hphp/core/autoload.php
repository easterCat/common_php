<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/3
 * Time: 21:16
 */

namespace core;

class autoload
{
    public static function load($class_name)
    {
        if (file_exists($class_name . '.php')) {
            require_once $class_name . '.php';
            return true;
        } else {
            echo 'error: unable to load ' . $class_name . '.php';
            return false;
        }
    }
}