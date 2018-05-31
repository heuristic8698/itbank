<?php

include "../login/dbconn.php";

if(!$_GET['id']||!$_GET['passwd']){
	echo("<script> window.alert('아이디와 패스워드 모두 입력해야 합니다.');history.go(-1);</script>");exit;}

if($_GET['passwd']!=$_GET['pass_confirm']){
	echo("<script> window.alert('Password와 Confirm Password가 일치하지 않습니다.');history.go(-1);</script>");exit;}
$sql_idcheck = "select * from member where id='".$_GET['id']."'";
$result = mysql_query($sql_idcheck, $connect);
$num_match = mysql_num_rows($result);
if($num_match){
	echo("<script>window.alert('이미 존재하는 ID입니다.');history.go(-1);</script>");
	mysql_close();exit;
}
$regist_day = date("Y-m-d (H:i)");

$sql = "insert into member
(id,pass,name,nick,mphone,email,regist_day) ";
$sql .= "values ('".$_GET['id']."','".$_GET
['passwd']."','".$_GET['name']."','".$_GET['nick']."','".
$_GET['hp']."','".$_GET['e-mail']."','$regist_day')";
echo $sql."<br>";
mysql_query($sql, $connect);
mysql_close();
echo "<script>window.alert('가입 완료');
		location.href='../index.php';</script>";
?>
