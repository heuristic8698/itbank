<?php 
	$connect = mysql_connect("localhost", "careadmin", "hackers") or die("SQL Server 연결 실패!");
	
	mysql_select_db("care_db", $connect);
?>
