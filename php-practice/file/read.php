<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 16:21
 */


$path = "D:\\easter_php\\php-practice\\file\\demo.txt";

readfile($path);

$fileStr = file_get_contents($path);
echo $fileStr;
echo "<br>";

$fileArr = explode("\n", $fileStr);
while (list($key, $val) = each($fileArr)) {
    ++$key;
    $val = trim($val);
    print "line" . $key . ":" . $val . "<br>";
}


$fp = fopen($path, "r");
var_dump($fp);

$contents = fread($fp,1024);

fclose($fp);

echo $contents;


