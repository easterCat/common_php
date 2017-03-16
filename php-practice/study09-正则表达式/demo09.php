<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
	
	//定制正则
	//正则表达式特殊字符有： . \ + * ? [ ^ ] $ ( ) { } = ! < > | : - 
	//preg_quote用来转义正则表达式字符，在语法前添加一个反斜线

	echo preg_quote('php is $150');//打出\$150,添加了一个\
?>