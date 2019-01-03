<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/3
 * Time: 20:40
 */

function welcome($var)
{
    if (is_null($var)) {
        var_dump($var);
    } else if (is_bool($var)) {
        var_dump($var);
    } else {
        echo '<p>' . print_r($var, true) . '</p>';
    }
}