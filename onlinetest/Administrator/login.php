<?php
	session_start();
	
	//登录
	if(!isset($_POST['submit'])){
		exit('非法访问!');
	}
	$adminname = htmlspecialchars($_POST['username']);
	//加密
	$adminpassword =MD5($_POST['password']);
	//数据库密码属性长度要足够，不然会出现验证错误	
	
	
	//包含数据库连接文件
	include('../templates/conn.php');
	//检测用户名及密码是否正确
	$check_query = mysql_query("select aid from admin where adminname='$adminname' and adminpassword='$adminpassword' limit 1");
	
	
	if($result = mysql_fetch_array($check_query)){
		//登录成功
		$_SESSION['adminname'] = $adminname;
		$_SESSION['aid'] = $result['aid'];
		echo $adminname,' 欢迎你！进入 <a href="../Admin_main/index.php">管理中心</a><br/>';
		echo '点击此处 <a href="logout.php?action=logout">注销</a> 登录！<br />';
		exit;
	}
	else {
		exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
	}

?>