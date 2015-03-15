<?php
session_start();
//登录
if(!isset($_POST['submit']))
{
	exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
$password =MD5($_POST['password']);



//包含数据库连接文件
include('../templates/conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
	//登录成功
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $result['uid'];
	echo $username,'欢迎你！进入 <a href="my.php">用户中心</a>|<a href="../index.php">首页<a><br />';
	echo '点击此处 <a href="logout.php?action=logout">注销</a> 登录！<br />';
	exit;
} else 
{
	exit('<h2 align="center">输入的账号或密码错误！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试</h2>');
}

?>