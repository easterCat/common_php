<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	$mode='/^([a-zA-Z0-9_\.]{2,255})@([a-z]{1,255}).([a-z]{2,4})$/';
	$string='yc60.com@gmail.com';

	if(preg_match($mode,$string)){
		echo '匹配';
	}else{
		echo '不匹配';
	}
?>