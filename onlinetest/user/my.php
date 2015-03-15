<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的主页</title>
</head>
<link href="css/my.css" rel="stylesheet" type="text/css" />
<style>

</style>
<body>
<!--header-->
<div class="header">
	<div class="header_main">
    	<li><a href="../index.php">首页</a></li>
        <li><a href="../exam/questionslist.php">考试列表</a></li>
    </div>
</div>
<!--clear-->
<div class="clear">
</div>


<!--content-->
<div class="homepage">
	<div class="home">
    	<div class="image">
        	<img src="images/touxiang.jpg">
        </div>
        <div class="content">
		<?php
     session_start();
    if(empty($_SESSION['username'])){
     echo '非法访问！ <a href="../index.php">返回首页';
    }else{
   $username = $_SESSION['username'];
   echo '昵称 ： ',$username,'<br/><br/>';
   //包含数据库连接文件
   include('../templates/conn.php');
  //检测用户名及密码是否正确
   $sql = mysql_query("select * from user where username='$username'  limit 1");
   $result = mysql_fetch_array($sql);
   $regdate=$result['regdate'];
   echo '注册时间 ： ',$regdate;
   
} ?>
       
        </div>
    </div>
</div>

<!--clear-->
<div class="clear">
</div>

<!--history-->
<div class="homepage">
	<div class="history_main">
    	<div id="history">
       <br/> <h2>&nbsp;&nbsp;历史记录:</h2><br/>
	   	<?php
    
   //包含数据库连接文件
   include('../templates/conn.php');
  //检测用户名及密码是否正确
   $sql = mysql_query("select * from score where username='$username'  ");
   $row=mysql_num_rows($sql);//返回取得的数据列的数目
   if($row){

   echo ' <table><tr height="20px" align="center" border="1">
                    	<td width="40%" align="center">试题名称</td>
                        <td width="10%"align="center">成绩</td>
                        <td width="25%"align="center">开答题始时间</td>
                        <td width="25%"align="center">交卷时间</td>
                    </tr>  ';

   while($result=mysql_fetch_array($sql)){  
    $stexamtime=$result['stexamtime'];  
    $enddate=$result['endtime'];
	$eid=$result['eid'];
	 $sqlname = mysql_query("select distinct papername from testpaper where eid='$eid'  ");//查询试卷名称
	 $resultname=mysql_fetch_array($sqlname);
	 $papername=$resultname['papername'];	 
	 $score=$result['mark'];
	 echo '<tr> <td align="center">',$papername,'</td>';//输出试题名称
	 echo '<td align="center">',$score,'</td>';
	 echo '<td align="center">',$stexamtime,'</td>';
	 echo '<td align="center">',$enddate,'</td></tr>';

   }
   
   echo '</table>';
   }
   
  
   
 ?>
       
        </div>
    </div>
</div>
</body>
</html>
