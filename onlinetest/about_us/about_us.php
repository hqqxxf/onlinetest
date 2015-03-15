<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="../js/index3.js" type="text/javascript">

</script>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="css/about_us.css" type="text/css" />
</head>
<body>
<!--header-->
<div class="header">
	<div class="main_header">
	<?php
   session_start();
if(empty($_SESSION['username'])){
   echo '您未登陆！ <a href="../user/login.html">登陆</a>&nbsp;|&nbsp;<a href="../user/reg.html">注册</a>';
}else{
$username = $_SESSION['username'];
   echo $username,'&nbsp;欢迎您！ <a href="../user/my.php">进入我的主页</a>&nbsp;|&nbsp;<a href="../user/logout.php?action=logout">注销</a>';
} ?>
    
    </div>
</div>
<!--title-->
<div class="logo">
	<div class="logo_main">
		<img title="大学网在线考试系统" src="../images/logo_title.png" />
    	<div class="logo_content">大学网在线考试系统</div>
	</div>
</div>

<!--nav-->
<div id="nav">
	<div class="nav_menu">
		<div class="menu">
        	<a href="../exam/questionslist.php" class="menu_a" style="background:#06C">试卷分类</a>
            <ul class="ul0">
            	<li><a href="../exam/questionslist.php">算法</a></li>
				<li><a href="../exam/questionslist.php">数据库</a></li>
				<li><a href="../exam/questionslist.php">数据结构</a></li>
				<li><a href="../exam/questionslist.php">操作系统</a></li>
				<li><a href="../exam/questionslist.php">编译原理</a></li>
				<li><a href="../exam/questionslist.php">计算机网络</a></li>
				<li><a href="../exam/questionslist.php">软件工程</a></li>
				<li><a href="../exam/questionslist.php">编程语言</a></li>
            </ul>
    	</div>
    	<div class="menu">
        	<a  href="../index.php" class="menu_a">首页</a>
           	<ul></ul>
    	</div>
    	<div class="menu">
        	<a href="../study_resource/study_resource.php" class="menu_a">学习资源</a>
            <ul >    </ul>           	
        
    	</div>
    	<div class="menu">
        	<a href="about_us.php" class="menu_a">关于我们</a>
            <ul></ul>
    	</div>
	</div>
</div>
<!--clear-->
<div class="clear">
</div>
<!--content-->
<div class="list">
	<div class="list_main">
    	<div class="left"><br />
        	<h3 align="center">联系我们</h3>
            <p><br />地  址：山东省青岛市经济技术开发区前湾港路579号<br /><br />邮  编：266510<br /><br />服务电话：0531-000000000<br/><br />传  真：0531-00000000<br/><br />邮  箱：sdukku@stu.com</p>
        </div>
        <div class="right">
		
		
	<p>	<br/><h2 >本系统供在线测评使用</h2><br/>1、采用开放、动态的系统框架，加强用户与网站的交互性。<br/><br/>

2、具有空间性。被授权用户可以在异地登陆考试系统，无需到指定地点<br/><br/>

3、操作简单，界面简洁<br/><br/>
 
4、提供考试时间范围，满足用户不同的需求<br/><br/>

5、实现了自动提交试卷的功能，当时间到达后，系统将自动提交试卷，使考试公平有效。<br/><br/>

6、系统自动阅卷，保证成绩真实准确。<br/><br/>

7、考生可以在个人页面可以查看个人成绩，做过的试卷的名称、开始答题时间和提交时间

</p>

		
		
		      </div>
    </div>
</div>

<!--footer-->

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>
