<?php
	session_start();
	include "inc/chec.php";
	include "conn/conn.php";
	$a_sqlstr = "insert into tb_videolist (grade,name,father,userName,issueDate) values('$_POST[grade]','$_POST[names]','$_POST[father]','$_SESSION[admin]','".date("Y-m-d H:i:s")."')";
	if($conn->execute($a_sqlstr) == false)
		echo "<script>alert('����ʧ��');history.go(-1);</script>";
	else
		echo "<script>top.opener.location.reload();alert('���ӳɹ�');window.close();</script>";
	
?>