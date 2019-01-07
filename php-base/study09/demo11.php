<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	//贪婪和分组获取的例子
	//用括号将模式分成3组，那么一组就是\1,二组就是\2，三组就是\3
	//而此时只有一个组，则是\1
	//直接替换则显示不全只输出this is，原因是string中的第一个[b]和第二个[/b]匹配了
	//解决贪婪问题
	$mode='/\[b\](.*)\[\/b\]/U';
	$replace='<strong>\1</strong>';
	$string='this is [b]php5[/b],this is [b]php4[/b]';

	echo preg_replace($mode,$replace,$string);
?>