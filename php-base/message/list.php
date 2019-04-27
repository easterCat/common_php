<!DOCTYPE html>
<html lang="utf-8">
<head>
    <?php
    include("conn.php");
    ?>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>


<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
    <?php
    $sql = "select * from bbs";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) { ?>

        <tr bgcolor="#eff3ff">
            <td>标题： <?php echo $row['top']; ?> <font color="red">用户： <?php echo $row['user']; ?></td>
        </tr>
        <tr bgColor="#ffffff">
            <td>发表内容:<?php echo $row['content']; ?></td>
        </tr>
        <tr bgColor="#ffffff">
            <td>
                <div align="right">时间:2018.0.1
            </td>
        </tr>
        <tr>
            <td>
                <button><a href="del.php?user=<?php echo $row['user']; ?>">删除</a></button>
            </td>
        </tr>
    <?php } ?>
    <tr bgcolor="#f0fff0">
        <td>
            <div align="right"><a href="add.html">返回留言</a>
        </td>
    </tr>
</table>
</html>