<?php
//打开
$fp = fopen('file.txt', 'w');
//写入
fwrite($fp, 'wuqilong');
//关闭
fclose($fp);



//或者
file_put_contents('file.txt', 'wo shi yige hao ren');
?>