<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/5
 * Time: 20:40
 */

/*
使用post请求

$方法 $路径 $版本
请求行...

请求内容...

post请求需要比get多两个请求内容
Content-length
Content-type
*/

$str = implode($_POST, '\n');
file_put_contents('./post.txt', $str);
echo 'ok';
