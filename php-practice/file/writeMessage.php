<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 21:36
 */


$fp = fopen("message.txt", "a");

$time = time();

$username = trim($_POST['username']);
$content = trim($_POST['content']);

$string = $username . "$#" . $content . "$#" . $time . "$#";

fwrite($fp, $string);

fclose($fp);

header('location:message.php');