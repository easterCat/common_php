<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/9
 * Time: 16:04
 */


//猴子选大王

function xdw($m, $n)
{
    $arr = array();
    $a = 'a';
    for ($i = 0; $i < $m; $i++) {
        $arr[] = $a++;
    }

    $i = 0;
    while (count($arr) > 1) {
        if ($i % $n === 0) {
            unset($arr[$i]);
        } else {
            $arr[] = $arr[$i];
            unset($arr[$i]);
        }
        $i++;
    }

    print_r($arr);
    return $arr;
}

echo "<pre>";
echo xdw(30, 3);