<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<?php
session_start();
	
	if(!isset($_POST['submit'])){
		exit('非法访问!');
	}
	$adminname = htmlspecialchars($_POST['adminname']);
	//加密
	$adminpassword =MD5($_POST['adminpassword']);
	//数据库密码属性长度要足够，不然会出现验证错误	
	
	
	//包含数据库连接文件
	include('../templates/conn.php');
	//检测用户名及密码是否正确
	$check_query = mysql_query("select aid from admin where adminname='$adminname' and adminpassword='$adminpassword' limit 1");
	
	
	if($result = mysql_fetch_array($check_query))
	{
		//账号密码正确
		$password_new = MD5($_POST['passwd_new']);
		if(strlen($password_new) < 6)
		{
			exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
		}
		$sql = "update admin set adminpassword = '$password_new' where adminname = '$adminname'";
		if(mysql_query($sql,$conn))
		{
			exit('<h2 align="center">密码修改成功！点击此处 <a href="login.html">登录</a></h2>');
		} 
		else 
		{
			echo '抱歉！添加数据失败：',mysql_error(),'<br />';
			echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
			
		}
	}
	else {
		exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}

?>
</html>