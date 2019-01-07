<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 21:29
 */

date_default_timezone_set("PRC");

$string = file_get_contents('message.txt');

if (!empty($string)) {
    $string = rtrim($string, "&^");
    $arr = explode("&^", $string);
    foreach ($arr as $value) {
        list($username, $content, $time) = explode("$#", $value);
        echo '用户名为<font color="green">' . $username . '</font>内容为<font color="red">' . $content . '</font>时间为' . date('Y-m-d H:i:s', $time);
        echo '<hr />';
    }
}
?>
<h1>基于文件的留言本演示</h1>
<form action="writeMessage.php" method="post">
    用户名：<input type="text" name="username"/><br/>
    留言内容：<textarea name="content"></textarea><br/>
    <input type="submit" value="提交"/>
</form>