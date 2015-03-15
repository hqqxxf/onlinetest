<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>
<script src="../js/index.js">
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
	
	<form id="Insert" method="post" action="insert.php" onSubmit="return InputCheck(this)">
	    
      <table border="1px solid yellow">
        <caption><h2>添加试卷</h2></caption>
            <tbody>
                <tr>	
				<td align="center" width="200px">试卷题目：</td>
				<td width="700px"><input type="text" size="100"  id="papername" name="papername" autofocus required/></td></tr>
                <tr>
				<td align="center">难度：</td>
				<td><input size="100" type="text"   id="degree" name="degree"placeholder="数字（1-5）" autofocus required/></td></tr>
                <tr>
				<td align="center">开始时间：</td>
				<td><input size="100" type="text" id="starttime" name="starttime"placeholder=" 如2014/12/21 04:00:00" autofocus required /></td></tr>
                <tr>
				<td align="center">结束时间：</td>
				<td><input size="100" type="text" id="endtime" name="endtime"placeholder=" 如2015/12/21 04:00:00" autofocus required/></td></tr>
			
				
				<?php
				for($i = 1; $i <=20; $i++){
				echo'
				 <tr><td align="center">题号：</td><td>',$i,'</td></tr>				
                 <tr><td align="center">问题描述：</td><td><input size="100" type="text" id="question',$i,'" name="question',$i,'" autofocus required/></td></tr>
                 <tr><td align="center">选项A：</td><td><input size="100" type="text"  id="A',$i,'" name="A',$i,'"autofocus required/></td></tr>
                 <tr><td align="center">选项B：</td><td><input size="100" type="text" id="B',$i,'" name="B',$i,'"autofocus required /></td></tr>
                 <tr><td align="center">选项C：</td><td><input size="100" type="text" id="C',$i,'" name="C',$i,'" autofocus required/></td></tr>
                 <tr><td align="center">选项D：</td><td><input size="100" type="text" id="D',$i,'" name="D',$i,'"autofocus required /></td></tr>
                 <tr><td align="center">答案：</td><td><input size="100" type="text" id="answer',$i,'" name="answer',$i,'" placeholder="A、B、C、D" autofocus required /></td></tr>
                 <tr><td align="center">分数：</td><td>5</td></tr>
                 <tr><td align="center">分析：</td><td><input size="100" type="text" id="analyse',$i,'" name="analyse',$i,'" /></td></tr>
				';
				}
				?>
              
            </tbody>
        </table>
     
        <input type="submit" name="submit" id="submit" value="添加">       
    

</form>
    	
	  <form id="Delete" method="post" action="delete.php" onSubmit="return InputCheck(this)">
	  
        <table border="1px solid yellow">
            <tbody>
			
                <caption><h2>删除试卷</h2></caption>
                <tr><td>试题编号</td><td><input  id="delete" name="delete"  type="text" /></td></tr>
            </tbody>
        </table> 
        <input type="submit" name="submit2" value="删除" align="center"/>
		</form>
        
        <form name="update" method="post" action="update.php" onSubmit="return InputCheck(this)">
	  
        <table border="1px solid yellow">
            <tbody>
                <caption><h2>修改试卷</h2></caption>
                <tr><td>试题编号</td><td><input name="eid"  type="text" /></td></tr>
                <tr><td>开始时间</td><td><input name="start"  type="text" /></td></tr>
                <tr><td>结束时间</td><td><input name="end"  type="text" /></td></tr>
            </tbody>
        </table> 
        <input type="submit" name="submit3" value="修改" align="center"/>
		</form>
        <form name="update_ABCD" method="post" action="update_ABCD.php" onSubmit="return InputCheck(this)">
	  
        <table border="1px solid yellow">
            <tbody>
                <caption><h2>修改试卷题目</h2></caption>
                <tr><td>试题编号</td><td><input name="eid"  type="text" /></td></tr>
                <tr><td>题目编号</td><td><input name="qid"  type="text" /></td></tr>
                <tr><td>问题描述</td><td><input name="questionText"  type="text" /></td></tr>
                <tr><td>选项A</td><td><input name="A"  type="text" /></td></tr>
                <tr><td>选项B</td><td><input name="B"  type="text" /></td></tr>
                <tr><td>选项C</td><td><input name="C"  type="text" /></td></tr>
                <tr><td>选项D</td><td><input name="D"  type="text" /></td></tr>
                <tr><td>答案</td><td><input name="answer"  type="text" /></td></tr>
                <tr><td>分析</td><td><input name="anlyse"  type="text" /></td></tr>
            </tbody>
        </table> 
        <input type="submit" name="submit4" value="修改" align="center"/>
		</form>
    </div>
</div>

    
<!--footer-->

<div class="footer">
	大学网在线考试系统 版权所有 贺倩倩组 地址：山东科技大学
</div>
</body>
</html>