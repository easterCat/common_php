<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/26
 * Time: 23:36
 */

echo "today is a fun day";
echo "</br>";

if (($_POST['username'] != null) && ($_POST['password'] != null)) {
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', 'root', 'test');
    mysqli_select_db($conn, 'test');
    $sql = "SELECT * FROM login WHERE username = '$userName'";
    $res = mysqli_query($conn, $sql);
    print_r($res);
    $row = mysqli_fetch_assoc($res);

    if ($row['password'] == $passWord) {
        setCookie('username', $userName, time() + 60 * 60 * 24 * 30);
        setCookie('password', $passWord, time() + 60 * 60 * 24 * 30);
        header('Location:welcome.php' . "?username=$userName");
    }
}

if (($_COOKIE['username'] != null) && ($_COOKIE['password'] != null)) {
    $userName = $_COOKIE['username'];
    $passWord = $_COOKIE['password'];
    $conn = mysqli_connect('localhost', 'root', 'root', 'test');
    $res = mysqli_query($conn, "SELECT * FROM login WHERE username = '$userName'");
    $row = mysqli_fetch_assoc($res);
    if ($row['password'] == $passWord) {
        header('Location:welcome.php' . "?username=$userName");
    }
}
?>
<html>
<head>

</head>
<body>
<form action="" method="POST">
    <div>
        用户名：<input type="text" name="username"/>
        密 码：<input type="text" name="password"/>
        <input type="submit" value="登录">
    </div>
</form>
</body>
</html>