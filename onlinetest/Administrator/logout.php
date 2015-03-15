<?php
session_start();
//注销登录
if($_GET['action'] == "logout"){
	 session_destroy();
	 
	echo '注销成功！点击此处 <a href="login.html">登录</a>';
	exit;
}
?>