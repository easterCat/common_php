<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/27
 * Time: 22:59
 */

include 'conn.php';
$user = $_GET['user'];
$query = "delete from bbs where user='$user'";
mysqli_query($conn, $query);
?>

<?php
//页面跳转，实现方式为javascript
$url = "list.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
?>