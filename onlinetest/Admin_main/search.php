<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="../js/index1.js">
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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

<div class="content_main">
	<div class="content">
	
	    
        <?php        	
//包含数据库连接文件
include('../templates/conn.php');
//$t_num=1;
$question_title = mysql_query("select distinct eid,degree,papername,starttime,endtime from testpaper  order by eid desc");
$row=mysql_num_rows($question_title);//返回取得的数据列的数目
if($row){                 //判断数据库中是否有值
 echo ' <table cellpadding="0px" cellspacing="0px" border="1px white solid;">
            <caption align="center" style="margin:10px 0 10px 0;"><h2>试卷列表</h2></caption>
            	<thead bgcolor="#39F">
                	<tr height="50px" align="center">
						<td width="10%">编号</td>
                    	<td width="40%">试卷类型</td>
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

 
  echo '<tr><td>',$eid,'</td><td><a href ="../exam/test.php?action=',$eid,'">',$papername,'</td>';
  echo '<td>',$degree,'</td>';
  echo '<td>',$starttime,'</td>';
  echo '<td>',$endtime,'</td></a>';
      
           
}    //while循环结束的括号
  echo '</tr> </tbody> </table>';  
}             //if结束的括号
   	
//用户

//$t_num=1;
$question_title = mysql_query("select distinct username,password,email,regdate from user order by uid desc");
$row=mysql_num_rows($question_title);//返回取得的数据列的数目
if($row){                 //判断数据库中是否有值
 echo ' <table class="table" cellpadding="0px" cellspacing="0px" border="1px white solid;">
            <caption align="center" style="margin:10px 0 10px 0;"><h2>用户列表</h2></caption>
            	<thead bgcolor="#39F">
                	<tr height="50px" align="center">
                    	<td width="20%">用户名</td>
                        <td width="40%">密码</td>
                        <td width="10%">邮箱</td>
						<td width="30%">注册时间</td>
                    </tr>
                </thead>
                <tbody>';
while($row2=mysql_fetch_array($question_title)){       //注意括号结束的位置
$username = $row2['username'];
$password = $row2['password'];
$email = $row2['email'];
$regdate = $row2['regdate'];
  echo '<tr><td><a href ="search_user.php?action=',$username,'">',$username,'</a></td>';
  echo '<td>',$password,'</td>';
  echo '<td>',$email,'</td>';
  echo '<td>',$regdate,'</td></a>';
      
           
}    //while循环结束的括号
  echo '</tr> </tbody> </table>';     
}             //if结束的括号
?>
 
        
   </div>
</div>

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>