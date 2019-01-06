<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/9
 * Time: 17:29
 */

$arr = [
    "one" => "阿萨大苏打",
    "阿三发射点",
    "过多干涉对方",
    "噶算法的",
    "好地方",
];

$one = each($arr);

echo "<pre>";
echo print_r($one);

while ($tmp = each($arr)) {
    print_r($tmp);
}