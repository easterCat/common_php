<?php
//最简单的路径，绝对路径

//文件名包含文件名称+扩展名
$path = 'D:\easter_php\php-practice\study06\file.php';

//basename返回路径的文件名部分
echo basename($path);
echo '</br>';

//dirname返回路径的目录部分
echo dirname($path);
echo '</br>';

//获取路径文件的信息
//如果是一个数组，建议使用print_r来进行输出，将信息全部显示来
print_r(pathinfo($path));

//获取路径文件名和文件目录的第二种方法
$path_name = pathinfo($path);
echo '</br>';

echo $path_name['dirname'];
echo '</br>';
echo $path_name['basename'];
echo '</br>';
?>