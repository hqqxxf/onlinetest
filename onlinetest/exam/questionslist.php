<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<!--<script src="test.js" type="text/javascript"></script>-->
<script src="js/questionslist.js" type="text/javascript">

</script>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
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
        	<a href="questionslist.php" class="menu_a" style="background:#06C">试卷分类</a>
            <ul class="ul0">
            	<li><a href="#">算法</a></li>
				<li><a href="#">数据库</a></li>
				<li><a href="#">数据结构</a></li>
				<li><a href="#">操作系统</a></li>
				<li><a href="#">编译原理</a></li>
				<li><a href="#">计算机网络</a></li>
				<li><a href="#">软件工程</a></li>
				<li><a href="#">编程语言</a></li>
            </ul>
    	</div>
    	<div class="menu">
        	<a  href="../index.php"class="menu_a">首页</a>
           	<ul></ul>
    	</div>
    	<div class="menu">
        	<a href="../study_resource/study_resource.php" class="menu_a">学习资源</a>
            <ul >    </ul>           	
        
    	</div>
    	<div class="menu">
        	<a href="../about_us/about_us.php" class="menu_a">关于我们</a>
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
    	<div class="left">
        	<h3 align="center">考试说明</h3>
            <p>1.一旦选择了试卷，其考试计时开始(倒计时，时间到系统会强行提交无论试卷是否完成);在手动提交考试试卷时，系统会自动检查当前试卷是否有未填写的题目并给予提示。<br />2.注意考试过程中不能点击浏览器的刷新(F5)和后退键。(文本框中答题时可后退)<br />3.全部做完后，请点"提交"按钮，转入成绩显示页面。</p>
			<h4 align="center" id="clock"></h4>
        </div>
        <div class="right">
<?php        	
//包含数据库连接文件
include('../templates/conn.php');
//$t_num=1;
$question_title = mysql_query("select distinct eid,degree,papername,starttime,endtime from testpaper  order by eid desc");
$row=mysql_num_rows($question_title);//返回取得的数据列的数目
if($row){                 //判断数据库中是否有值
 echo ' <table class="table" cellpadding="0px" cellspacing="0px" border="1px white solid;">
            <caption align="center" style="margin:10px 0 10px 0;"><h2>考试列表</h2></caption>
            	<thead bgcolor="#CCFFFF">
                	<tr height="50px" align="center">
                    	<td width="50%">试卷类型</td>
                        <td width="10%">难易程度</td>
                        <td width="20%">开始时间</td>
                        <td width="20%">结束时间</td>
                    </tr>
                </thead>
                <tbody>';
while($row2=mysql_fetch_array($question_title)){       //注意括号结束的位置
$papername=$row2['papername'];
$degree=$row2['degree'];
if($degree==1)
$degree="易";
else if($degree==2)
$degree="中";
else
$degree="难";
$eid=$row2['eid'];
$starttime=$row2['starttime'];
$endtime=$row2['endtime'];

 
  echo '<tr><td><a href ="../exam/test.php?action=',$eid,'">',$papername,'</td>';
  echo '<td>',$degree,'</td>';
  echo '<td>',$starttime,'</td>';
  echo '<td>',$endtime,'</td></a>';
      
           
}    //while循环结束的括号
  echo '</tr> </tbody> </table>';     
}             //if结束的括号
?>
           
        </div>
    </div>
</div>

<!--footer-->

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>



