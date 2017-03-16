<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	
	//修饰符一般放在/**/外面

	//i，在规则后面加上i，完成不区分大小写的匹配
	//m表示匹配首尾的时候，如果遇到换行\n,也应该承认是结尾
	//x表示忽略正则中的空白
	//A表示必须从头开始匹配
	//U表示禁止贪婪

	//$mode='/php/i';//规则模式
	//$mode='/php/m';//规则模式
	$mode='/[^abc]/';
	$string='dsfsdfsdfphpzxczczcxz';//纯字符串
	if(preg_match($mode,$string)){
		echo '匹配';
	}else{
		echo '不匹配';
	}
  

?>