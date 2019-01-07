<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 17:40
 */


$h = tmpfile();

$r = fwrite($h, "临时文件");

fclose($h);

echo "向临时文件写入了" . $r;