
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="../js/index1.js">
</script>
<link rel="stylesheet" href="../exam/css/style.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="study_resource.css" type="text/css" />
</head>
<body>
<!--header-->
<div class="header">
	<div class="main_header">
	<?php	
   session_start();
if(empty($_SESSION['username'])){
   echo '您未登陆！ <a target="_blank"  href="user/login.html">登陆</a>&nbsp;|&nbsp;<a href="user/reg.html">注册</a>';
}else{
$username = $_SESSION['username'];
   echo $username,'&nbsp;欢迎您！ <a target="_blank" href="user/my.php">进入我的主页</a>&nbsp;|&nbsp;<a href="user/logout.php?action=logout">注销</a>';
} 
?>  
	
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
        	<a href="../exam/questionslist.php" class="menu_a" >试卷分类</a>
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
        	<a href="../index.php" class="menu_a">首页</a>
           	<ul></ul>
    	</div>
    	<div class="menu">
        	<a href="study_resource.php" class="menu_a" style="background:#06C">学习资源</a>
            <ul></ul>
    	</div>
    	<div class="menu">
        	<a href="../about_us/about_us.php" class="menu_a">关于我们</a>
            <ul></ul>
    	</div>
	</div>
</div>

<div class="clear">
</div>
<div class="list">
	<div class="list_main">
		<div class="left">
         	<ul>
            	<li><a href="#sf">算法</a></li>
				<li><a href="#sjk">数据库</a></li>
				<li><a href="#sjjg">数据结构</a></li>
				<li><a href="#czxt">操作系统</a></li>
				<li><a href="#bcyl">编译原理</a></li>
				<li><a href="#jsjwl">计算机网络</a></li>
				<li><a href="#rjgc">软件工程</a></li>
				<li><a href="#bcyy">编程语言</a></li>
            </ul>
        </div>
        <div class="right">
        	<a name="sf" href="http://item.jd.com/11144230.html?utm_source=click.linktech.cn&utm_medium=tuiguang&utm_campaign=t_4_A100185408&utm_term=d72e8384141c4f32a976f79e9e255566" class="res_study">
                <img width="150px" height="150px" src="books/suanfa1.gif" />
            	<div class="wenzi">
                	算法书籍
            	</div>
            </a>
            <a href="http://v.baidu.com/show/9384.htm?fr=ala9&ty=26" class="res_study">
                <img width="150px" height="150px" src="books/suanfa2.png" />
            	<div class="wenzi">
                	算法视频
            	</div>
            </a>
            <a name="sjk" href="http://search.dangdang.com/?key=%CA%FD%BE%DD%BF%E2" class="res_study">
                <img width="150px" height="150px" src="books/shujuku1.gif" />
            	<div class="wenzi">
                	数据库书籍
            	</div>
            </a>
            <a href="http://edu.51cto.com/course/course_id-131.html" class="res_study">
                <img width="150px" height="150px" src="books/shujuku2.png" />
            	<div class="wenzi">
                	数据库视频
            	</div>
            </a>
        	<a name="sjjg" href="http://item.jd.com/10057441.html?utm_source=baidu&utm_medium=cpc&utm_campaign=&utm_term=baidu_4916131_0_s28545546ee2eaa65833.18762650" class="res_study">
                <img width="150px" height="150px" src="books/shoujujiegou1.jpg" />
            	<div class="wenzi">
                	数据结构书籍
            	</div>
            </a>
            <a href="http://down.51cto.com/zt/306" class="res_study">
                <img width="150px" height="150px" src="books/shujujiegou2.png" />
            	<div class="wenzi">
                	数据结构视频
            	</div>
            </a>
            <a name="czxt" href="http://list.jd.com/1713-3287-3800.html" class="res_study">
                <img width="150px" height="150px" src="books/os1.png" />
            	<div class="wenzi">
                	操作系统书籍
            	</div>
            </a>
            <a href="http://www.56.com/w84/album-aid-7582301.html" class="res_study">
                <img width="150px" height="150px" src="books/os2.png" />
            	<div class="wenzi">
                	操作系统视频
            	</div>
            </a>
            <a name="bcyl" href="http://download.csdn.net/download/jianchi88/1243284" class="res_study">
                <img width="150px" height="150px" src="books/bianchengyuanli1.jpg" />
            	<div class="wenzi">
                	编程原理书籍
            	</div>
            </a>
            <a href="http://www.zixue100.net/v-18-458.html" class="res_study">
                <img width="150px" height="150px" src="books/bianchengyuanli2.jpg" />
            	<div class="wenzi">
                	编程原理视频
            	</div>
            </a>
            <a name="jsjwl" href="http://www.cncrk.com/downinfo/40695.html" class="res_study">
                <img width="150px" height="150px" src="books/jisuanjiwangluo1.jpg" />
            	<div class="wenzi">
                	计算机网络书籍
            	</div>
            </a>
            <a href="http://edu.51cto.com/course/course_id-1375.html" class="res_study">
                <img width="150px" height="150px" src="books/jisuanjiwangluo2.jpg" />
            	<div class="wenzi">
                	计算机网络视频
            	</div>
            </a>
        	<a name="rjgc" href="http://product.china-pub.com/9210" class="res_study">
                <img width="150px" height="150px" src="books/ruanjiangongcheng1.jpg" />
            	<div class="wenzi">
                	软件工程书籍
            	</div>
            </a>
            <a href="down.51cto.com/zt/3650" class="res_study">
                <img width="150px" height="150px" src="books/ruanjiangongcheng2.png" />
            	<div class="wenzi">
                	软件工程视频
            	</div>
            </a>
            <a name="bcyy" href="http://baike.baidu.com/view/2887496.htm?fr=aladdin" class="res_study">
                <img width="150px" height="150px" src="books/bianchengyuyan1.gif" />
            	<div class="wenzi">
                	编程语言排行榜
            	</div>
            </a>
            <a href="http://v.baidu.com/v?s=8&word=%B1%E0%B3%CC%D3%EF%D1%D4%D7%D4%D1%A7%CA%D3%C6%B5&fr=ala11" class="res_study">
                <img width="150px" height="150px" src="books/bianchengyuyan2.png" />
            	<div class="wenzi">
                	编程语言视频
            	</div>
            </a>
        </div>
	</div>
</div>

<!--footer-->
<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>