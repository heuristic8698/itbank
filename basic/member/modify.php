<?php
session_start();
include "../login/dbconn.php";

$sql = "select * from member where id='".$_SESSION['userid']."'";
$result = mysql_query($sql, $connect);
$row = mysql_fetch_array($result);
$pass = $row[pass];
if($_GET['pass_old']!=$pass){
	echo("<script> window.alert('기존 비밀번호가 일치하지 않습니다.');history.go(-1);</script>");exit;mysql_close();}

if($_GET['pass_new']){
	if($_GET['pass_new']!=$_GET['pass_confirm']){
	echo("<script> window.alert('New Password와 Confirm Password가 일치하지 않습니다.');history.go(-1);</script>");exit;}
	$sql = "update member set pass='".$_GET['pass_new']."',name='".$_GET['name']."',";
}
else{s
	$sql = "update member set name='".$_GET['name']."',";
}

$sql .="nick='".$_GET['nick']."', mphone='".$_GET['hp']."', email='".$_GET['e-mail']."' where id='".$_SESSION['userid']."'";

mysql_query($sql, $connect);
mysql_close();
echo "<script>alert('수정 완료'); window.alert('다시 로그온하세요.');location.href='../login/logout.php';</script>";

?>
