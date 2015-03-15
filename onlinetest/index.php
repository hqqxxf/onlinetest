<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="js/index.js">
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--header-->
<div class="header">
	<div class="main_header">
<?php	
session_start();
if(empty($_SESSION['username'])){
   echo '您未登陆！ <a href="user/login.html">登陆</a>&nbsp;|&nbsp;<a href="user/reg.html">注册</a>';
}else{
$username = $_SESSION['username'];
   echo $username,'&nbsp;欢迎您！ <a href="user/my.php">进入我的主页</a>&nbsp;|&nbsp;<a href="user/logout.php?action=logout">注销</a>';
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
        	<a href="exam/questionslist.php" class="menu_a" style="background:#06C">试卷分类</a>
            <ul class="ul0" style="display:block">
            	<li><a href="exam/questionslist.php">算法</a></li>
				<li><a href="exam/questionslist.php">数据库</a></li>
				<li><a href="exam/questionslist.php">数据结构</a></li>
				<li><a href="exam/questionslist.php">操作系统</a></li>
				<li><a href="exam/questionslist.php">编译原理</a></li>
				<li><a href="exam/questionslist.php">计算机网络</a></li>
				<li><a href="exam/questionslist.php">软件工程</a></li>
				<li><a href="exam/questionslist.php">编程语言</a></li>
            </ul>
    	</div>
    	<div class="menu">
        	<a href="index.php" class="menu_a">首页</a>
           	<ul></ul>
    	</div>
    	<div class="menu">
        	<a href="study_resource/study_resource.php" class="menu_a">学习资源</a>
            <ul >  </ul>          	
          
    	</div>
    	<div class="menu">
        	<a href="about_us/about_us.php" class="menu_a">关于我们</a>
            <ul></ul>
    	</div>
	</div>
</div>

<!--banner-->
<div id="banner">
   <img src="images/big_background.jpg" width="1366px" height="300px" />
</div>

<!--content-->
<div class="content_main">
<div class="content">
	<div class="hot_test">
		<div class="title">
    		<h3>最新测试</h3>
    	</div>
    	<div class="test">
		
<?php		
//包含数据库连接文件
require("templates/conn.php");
//$t_num=1;
$question_title = mysql_query("select distinct papername from testpaper order by eid desc limit 8");
$row=mysql_num_rows($question_title);//返回取得的数据列的数目
if($row){                 //判断数据库中是否有值
 echo ' <ul> ';          
while($row2=mysql_fetch_array($question_title)){       //注意括号结束的位置
$papername=$row2['papername']; 
  echo '<li>&nbsp;&nbsp;<a href="exam/questionslist.php">',$papername,'</a></li>';
           
}    //while循环结束的括号
  echo '</ul>';     
}   //if结束的括号     
?>           
  
    	</div>
	</div>
    
    <div class="hot_res">
    	<div class="title"><h3>热门学习资源</h3>
        </div>
    	<div class="res">
    		<ul>
        	<li><a href="study_resource/study_resource.php#sf">
    算法</a></li>
    <li><a href="study_resource/study_resource.php#sjk">
    数据库</a></li>
    <li><a href="study_resource/study_resource.php#sjjg">
   	数据结构</a></li>
    <li><a href="study_resource/study_resource.php#czxt">
    操作系统</a></li>
    <li><a href="study_resource/study_resource.php#byyl">
    编译原理</a></li>
    <li><a href="study_resource/study_resource.php#jsjwl">
    计算机网络</a></li>
    <li><a href="study_resource/study_resource.php#rjgc">
    软件工程</a></li>
    <li><a href="study_resource/study_resource.php#bcyl">
    编程语言</a></li>
        	</ul>
    	</div>
     </div>
</div>
</div>
<!--footer-->

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>