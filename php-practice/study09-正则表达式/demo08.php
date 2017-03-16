<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php

	//执行一个全局正则表达式的匹配

	//将字符串的所有匹配得到的结果放到一个数组变量中去

	echo preg_match_all('/php[1-6]/','php3spiaojfjhphp5epifdjphp23123php',$out);

	print_r($out);
?>