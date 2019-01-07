<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/9
 * Time: 17:29
 */

echo "<pre>";
print_r($_SERVER);

foreach ($_SERVER as $key => $value) {
    echo $key . "-" . $value;
    echo "</br>";
}