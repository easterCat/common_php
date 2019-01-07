<?php
/**
 * Created by PhpStorm.
 * User: winb
 * Date: 2019/1/5
 * Time: 21:44
 */

//默认是302
//header('Location:http://www.baidu.com');

//指定是301重定向
header('Location:http://www.baidu.com', true, 301);