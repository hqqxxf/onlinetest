<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线考试系统</title>

<!--<script src="js/test.js" type="text/javascript">

</script>-->
<script>
function test_home(aNav_a,aul,ali)
{
	for(var i=0; i<aNav_a.length; i++)
	{
		aNav_a[i].index=i;
		aul[i].index=i;
		aul[i].onmouseover=aNav_a[i].onmouseover=function()
		{
			for(var j=0; j<aNav_a.length; j++)
			{
				aNav_a[j].style.color="white";
				aNav_a[j].style.background="#39F";
			}
			for(var j=0; j<aul.length; j++)
			{
				aul[j].style.display='none';
			}
			aNav_a[this.index].style.color="yellow";
			aNav_a[this.index].style.background="#06C";
			aul[this.index].style.display='block';
		}
		aul[i].onmouseout=aNav_a[i].onmouseout=function()
		{
			for(var j=0; j<aNav_a.length; j++)
			{
				aNav_a[j].style.color="white";
				aNav_a[j].style.background="#39F";
			}
			for(var j=0; j<aul.length; j++)
			{
				aul[j].style.display='none';
			}
			aNav_a[0].style.color="yellow";
			aNav_a[0].style.background="#06C";
			//aul[0].style.display='block';
		}
	}
	for(var i=0; i<ali.length; i++)
	{
		ali[i].onmouseover=function()
		{
			for(var i=0; i<ali.length; i++)
			{
				ali[i].style.background='';
			}
			this.style.background="#99F";
		}
		ali[i].onmouseout=function()
		{
			for(var i=0; i<ali.length; i++)
			{
				ali[i].style.background='';
			}
		}
	}	
}
function change(num)
{
	if(num<10)
		return '0'+num;
	else
		return ''+num;
}
function backward_clock(obj)
{
	var end=(new Date(obj.innerHTML)).getTime();
	var now=(new Date()).getTime();
	var s=Math.floor((end-now)/1000);
	var day=Math.floor(s/(3600*24));
	var hour=Math.floor((s%(3600*24))/3600);
	var minute=Math.floor(((s%(3600*24))%3600)/60);
	var second=Math.floor(((s%(3600*24))%3600)%60);
	var str='剩余'+day+'天'+change(hour)+':'+change(minute)+':'+change(second);
	if(day<=0 && hour<=0 && minute<=0 && second<=0)
	{
		alert('时间到，去看成绩吧！');
		//window.close();
		document.getElementById('test').submit();

		
	}
	return str;
}
window.onscroll=function()
{
	var oDiv=document.getElementById('top');
	var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
	oDiv.style.top=scrollTop+'px';
}
window.onload=function()
{
	var oNav=document.getElementById('nav');
	var aNav_a=oNav.getElementsByClassName('menu_a');
	var aul=oNav.getElementsByTagName('ul');
	var ali=document.getElementsByTagName('li');
	test_home(aNav_a,aul,ali);
	
	var oDiv=document.getElementById('div1');
	var oTop=document.getElementById('top');
	var str=backward_clock(oDiv);
	
	oTop.innerHTML=str;
	setInterval(function(){
		var oDiv=document.getElementById('div1');
		var oTop=document.getElementById('top');
		var str=backward_clock(oDiv);
		oTop.innerHTML=str;
	},1000);
}// JavaScript Document

</script>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../exam/css/style.css" type="text/css" />
</head>
<body>

<!--header-->
<div class="header">
	<div class="main_header">
	<?php

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
   <p id="current_time"></p>
        </div>
        <div class="right">