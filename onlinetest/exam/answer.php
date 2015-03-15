<?php
session_start();

//检查是系统提交还是自动提交
$s=1;
if(isset($_POST['submitwe']))//不是系统自动提交
{
$s=0;
}


$eid=$_GET['action'] ;//选择的试卷
//包含数据库连接文件
include('../templates/conn.php');
$username=$_SESSION['username'];
$sqlrecord=mysql_query("select * from score where eid='$eid' and username='$username' limit 1");//记录过考试就不能再考了
if($row=mysql_num_rows($sqlrecord))
{
echo '<script type="text/javascript"Charset="utf-8"> alert("你已经测试过此试卷，不可以再测试了！");history.back(); </script>';exit;
}


$score=0;
//检测答案是否正确

$check_query = mysql_query("select answer from testpaper where eid=1  limit 20");
$i = 0;

while($result = mysql_fetch_array($check_query)){
$ans=$result['answer'];


if(empty($_POST[$i])&&$s==0)//有选项为空时，返回考试页面，提示还有题没有做完
{echo '<script type="text/javascript"Charset="utf-8"> alert("还未做完");history.back(); </script>';exit;}

if(empty($_POST[$i])) 
{
$i++;
}

else if($ans==$_POST[$i])
{$score+=5;
$i++;}
}

echo '得分：',$score;
//$username=$_SESSION['username'];
$enddate=date('y-m-d h:i:s',time());

$question_query = mysql_query("select stexamtime from record where eid='$eid' and   username='$username'");
$row2=mysql_fetch_array($question_query);
$startime=$row2['stexamtime'];
//echo ' ',$startime;//测试
$sql = "INSERT INTO score(username,eid,mark,stexamtime,endtime)VALUES('$username','$eid','$score','$startime','$enddate')";
mysql_query($sql,$conn);
echo '<br/><a href="../index.php">返回首页</a>&nbsp;<a href="../user/my.php">进入个人中心</a>';

?>