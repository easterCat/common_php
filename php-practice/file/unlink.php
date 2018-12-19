<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 17:49
 */

//$file = 'write.txt.copy';
$file = 'demo.txt.old';

if (unlink($file)) {
    echo 'unlink success';
} else {
    echo 'unlink failure';
}