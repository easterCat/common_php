<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/27
 * Time: 22:28
 */

$conn = mysqli_connect('localhost', 'root', 'root');

if (mysqli_errno($conn)) {

    echo mysqli_error($conn);

    exit;
}


mysqli_select_db($conn, 'test');

mysqli_set_charset($conn, 'utf8');
