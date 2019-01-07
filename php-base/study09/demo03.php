<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
  
  //[]中括号是正则里面的一种语法，里面的东西表示任由一个既可

  //[a-z]表示26个小写字母中,随便其中一个
  //[A-Z]同上
  //[0-9]同上

  //[a-zA-Z0-9_]表示其中一个范围内的任意一个
  
  //[^abc]中括号里面的^表示除了abc之外都能匹配的字符串

  //为了让人们使用方便，将\w等用于[a-zA-Z0-9_],W与w相反
  //为了让人们使用方便，将\d等用于[0-9],将\D等同于[^0-9],d与D相反

  //\s匹配任何空白字符，S与s相反
  //\b表示到达单词的边界，没有到达就不匹配，边界可以理解为空格，\B表示没有到达边界

  //\表示匹配特殊字符，比如匹配+，需要在+前加上\+

  //$mode='/[a-z]/';//规则模式
  //$mode='/[a-zA-Z0-9]/';
  $mode='/[^abc]/';
  $string='dsfsdfsdfphpzxczczcxz';//纯字符串
  if(preg_match($mode,$string)){
    echo '匹配';
  }else{
    echo '不匹配';
  }
  

?>