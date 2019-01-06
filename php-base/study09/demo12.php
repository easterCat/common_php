<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	//用正则进行分割
	//如果没有[],则表示要同时满足
	//preg_split()函数按照第一个参数的规则模式将第二个参数的字符串分割，并将分割的字符串存放到一个数组中返回

	print_r(preg_split('/[.@]/','yc60.com@amial.com'));
?>