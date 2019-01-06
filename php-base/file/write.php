<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 17:28
 */


$content = file_put_contents("write.txt", "今天是啊审计局赛点局爱神的箭爱降低");

if ($content) {
    echo "success";
    echo file_get_contents("write.txt");
} else {
    echo "failure";
}


$fp = fopen("write2.txt", "w");
$len = fwrite($fp, "家死哦激动啊四季都爱上京东aS大声道");
fclose($fp);
print $len . '字节写入\n';

