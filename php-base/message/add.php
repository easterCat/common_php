<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/27
 * Time: 22:26
 */

include('conn.php');

$user = $_POST['user'];
$top = $_POST['top'];
$content = $_POST['content'];

if ($_POST['submit']) {
    $sql = "insert into bbs(user,top,content) values('" . $user . "','" . $top . "','" . $content . "')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo '成功';
    } else {
        echo '失败';
    }

    echo "<script>alert('提交成功！返回列表。');location.href='list.php';</script>";
}