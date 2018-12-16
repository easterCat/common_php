<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 17:43
 */


$filename = 'demo.txt';

$filenameOld = $filename . ".old";

rename($filename, $filenameOld);