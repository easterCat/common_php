<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	
	//搜索匹配的结果，然后替换掉
	//第一个参数存放正则模式
	//第二个参数存放替换用的字符串
	//第三个参数就是字符串
	
	//用第二个参数将第三个参数中的匹配的字符串替换掉
	echo preg_replace('/php[1-6]/','php1python','this is php5,this is php4');
	

?>