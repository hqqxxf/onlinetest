<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="../js/index2.js">
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--header-->
<div class="header">
	<div class="main_header">
<?php
session_start();
if(empty($_SESSION['adminname'])){
   echo '您未登陆！ <a href="../Administrator/login.html">登陆</a>';
}else{
$adminname = $_SESSION['adminname'];
   echo $adminname,'&nbsp;欢迎管理员！&nbsp;|&nbsp;<a href="../Administrator/logout.php?action=logout">注销</a>';
} 
?>
    </div>
</div>

<!--title-->
<div class="logo">
	<div class="logo_main">
		<img src="images/logo_title.png" title="大学网在线考试系统"  />
    	<div class="logo_content">大学网在线考试系统</div>
	</div>
</div>

<!--nav-->

<div id="nav" >
	<div class="nav_menu">
    	<div class="menu">
        	<a href="index.php" class="menu_a">试卷管理</a>
           	<ul></ul>
    	</div>
    	<div class="menu">
        	<a href="user_admin.php" class="menu_a">用户管理</a>
            <ul>  </ul>          	
          
    	</div>
        <div class="menu">
        	<a href="search.php" class="menu_a">查询</a>
            <ul>  </ul>          	
          
    	</div>
	</div>
</div>

<div class="content_main" style="height:430px">
	<div class="content" style="height:430px">
	
	<form id="Add" method="post" action="adduser.php" onSubmit="return InputCheck(this)">
    	<table border="1px solid yellow">
        <caption><h2>添加用户</h2></caption>
            <tbody>
                <tr><td align="center" width="200px">用户名：</td><td width="700px"><input type="text" size="100" id="username" name="username"  type="text" placeholder="Username  （3-15字符长度，支持汉字、字母、数字及_）" autofocus required /></td></tr>
                <tr><td align="center">密码：</td><td><input size="100"  id="password" name="password" type="password" placeholder="Password  (不少于6位)" required /></td></tr>
                <tr><td align="center">邮箱：</td><td><input size="100" id="email" name="email" type="text" placeholder="Email" required/></td></tr>
              
            </tbody>
        </table>
        <input type="submit" name="submit3" value="添加用户" />
		</form>
		
		<form id="Delete" method="post" action="deleteuser.php" onSubmit="return InputCheck(this)">
        <table border="1px solid yellow">
            <tbody>
                <caption><h2>删除用户</h2></caption>
                <tr><td align="center" width="200px">用户名</td><td><input type="text" size="100" id="username" name="username"  type="text"/></td></tr>
            </tbody>
        </table>
        <input type="submit" name="submit2" value="删除用户" align="center"/>
		</form>
		
    </div>
</div>

    
<!--footer-->

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>