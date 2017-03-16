<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	
	//搜索数组中相匹配的字符串
	//preg_grep()函数

	$language=array('php','jsp','asp','python','ruby');
	//找出3p语言


	//  $mode='/p$/';//结尾处匹配p

	$mode='/^p/';


	print_r(preg_grep($mode,$language));
    

?>