<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
  //第一个参数表示匹配模式，就是和字符串去比较,匹配
  //第二个参数表示字符串
  
  //匹配就是一个一个比较过去
  //按照模式的规则区匹配
  //只要模式通过，那么整体就通过
  //目前的模式是一个整体，php
  //字符串只要有连续的php，就通过
  $mode='/php/';//规则模式
  $string='dsfsdfsdfphpzxczczcxz';//纯字符串
  if(preg_match($mode,$string)){
  	echo '匹配';
  }else{
  	echo '不匹配';
  }
  
//if('a'=='a'){
//	echo '正确';
//}else{
//	echo '错误';
//}
?>