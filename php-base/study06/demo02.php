<?php
//这是一个绝对路径
$path = 'D:\wamp\www\php-project\php-project\php-practice\study06\demo02.php';
echo $path;
echo '</br>';

//realpath将文件名转换为绝对路径
$path = 'demo02.php';
echo realpath($path);
?>