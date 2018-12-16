<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 17:47
 */

$file1 = "write.txt";

$file2 = $file1.".copy";

copy($file1,$file2);