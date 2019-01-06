<?php

$path = 'D:\wamp\www\php-project\php-project\php-practice\study06\demo02.php';

//filesize获取文件大小
echo filesize($path);echo '</br>';
//将大小转换为kb
echo filesize($path)/1024;
echo '</br>';
//将kb值进行四舍五入
echo round(filesize($path)/1024,2);echo '</br>';
?>