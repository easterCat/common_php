<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2018/12/16
 * Time: 21:49
 */

include 'config.php';

?>

<form action="changeConfig.php" method="post">
    <input type="text" name="DB_HOST" value="<?php echo DB_HOST; ?>"/><br/>
    <input type="text" name="DB_USER" value="<?php echo DB_USER; ?>"/><br/>
    <input type="text" name="DB_PWD" value="<?php echo DB_PWD; ?>"/><br/>
    <input type="text" name="DB_NAME" value="<?php echo DB_NAME; ?>"/><br/>
    <input type="submit" value="修改"/>
</form>