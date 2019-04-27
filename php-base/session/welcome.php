<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/26
 * Time: 23:47
 */
session_start();
$user = $_SESSION['username'];
?>
<html>
<head>

</head>
<body>
welcome,<?php echo $user; ?>
</body>
</html>