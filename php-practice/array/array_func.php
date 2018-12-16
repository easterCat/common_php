<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/15
 * Time: 14:36
 */

$arr = ["aaa" => "123", "bbb" => "456", "ccc" => "789"];

print_r($arr);

if (in_array("123", $arr)) {
    echo "在";
} else {
    echo "不在";
}


$arr2 = [1, 2, 3, 4, 5];

array_walk($arr2, function ($value) {
    $value = $value * $value;
    echo $value;
    echo "<br>";
});