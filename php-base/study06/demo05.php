<?php
$path = 'D:\wamp\www\php-project\php-project\php-practice\study06\demo02.php';
echo fileatime($path);
echo '</br>';

//格式化一个本地
//调整时区,与国际标准时间少了8个小时
date_default_timezone_set('Asia/Shanghai');
//传入的参数2是一个时间戳
//获取文件的最后访问时间
echo date('Y-m-d H:i:s',fileatime($path));
echo '</br>';
//获取最后的改变时间
echo date('Y-m-d H:i:s',filectime($path));
echo '</br>';
//获取最后的修改时间
echo date('Y-m-d H:i:s',filemtime($path));
echo '</br>';
?>