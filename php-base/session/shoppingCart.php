<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/4/27
 * Time: 19:26
 */
session_start();
$goods = $_SESSION['goods']
;
echo '您买了:<br />';
print_r($goods);
foreach ($goods as $value) {
    echo $value['name'] . ' 价格 ' . $value['price'] . ' 数量 ' . $value['number'] . '<br />';
}
echo '总价' . $_SESSION['totalPrice'] . '</br>';
?>
<a href="goodsList.php">返回商品列表</a>
</body>
</html>
