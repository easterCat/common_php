<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/15
 * Time: 16:24
 */

//插入排序,选择排序,冒泡排序 速度慢,时间复杂度差不多
//快速排序 较快


//冒泡排序
//$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//$len = count($arr);
//for ($j = 0; $j < $len - 1; $j++) {
//    for ($i = 0; $i < $len - $j - 1; $i++) {
//
//        if ($arr[$i] < $arr[$i + 1]) {
//            $tmp = $arr[$i];
//            $arr[$i] = $arr[$i + 1];
//            $arr[$i + 1] = $tmp;
//        }
//
//        echo $arr[$i] . "&nbsp";
//    }
//}
//echo "<pre>";
//print_r($arr);


//快速排序

$arr = [11, 32, 51, 63, 21, 61, 47, 1, 75, 124, 6, 12];

function qsort($arr)
{

    $len = count($arr);

    if ($len <= 1) {
        return $arr;
    }

    $key = $arr[0];
    $left = array();
    $right = array();

    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] < $key) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    echo "left=>";
    print_r($left);
    echo "<br>";
    echo $key;
    echo "<br>";
    echo "right=>";
    print_r($right);
    echo "<br>";
    $left = qsort($left);
    $right = qsort($right);

    return array_merge($left, [$key], $right);
}

print_r($arr);
echo "<br>";
print_r(qsort($arr));
