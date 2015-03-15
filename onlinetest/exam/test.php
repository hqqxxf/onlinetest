
<?php
header("Content-Type: text/html; charset=utf8");
session_start();
if(empty($_SESSION['username'])){echo '<script type="text/javascript"Charset="utf-8"> alert("请先登陆");history.back(); </script>';exit;}
$eid=$_GET['action'] ;//选择的试卷  测试
//$eid=1;
//echo '选择试卷 ：',$eid;//测试
//包含数据库连接文件
include('../templates/conn.php');
$username=$_SESSION['username'];

$sqlrecord=mysql_query("select * from record where eid='$eid' and username='$username' limit 1");//记录过开始时间久就不用记了
if($row=mysql_num_rows($sqlrecord)==0)
{
$stexamtime=date('y-m-d h:i:s',time());
$sql = "INSERT INTO record(username,eid,stexamtime)VALUES('$username','$eid','$stexamtime')";
mysql_query($sql,$conn);
}

include('../templates/testheader.php');

$question_query = mysql_query("select * from testpaper where eid='$eid'  limit 20");
$namecount=0;//输出试卷名称次数
$t_num=0;
$row=mysql_num_rows($question_query);//返回取得的数据列的数目

if($row){     //判断数据库中是否有值
	        
//建立表单，获取答案
echo '<form  method="post" id="test" action="answer.php?action=',$eid,'">';

while($row2=mysql_fetch_array($question_query)){       //注意括号结束的位置


    
 $name=$row2['papername'];
 if($namecount==0)
 {
 echo '<br/><h1 align="center">',$name,'</h1><br/>';//输出试卷名称
 $namecount++;
 }

$questionText=$row2['questionText'];
$degree=$row2['degree'];
$optionA=$row2['optionA'];
$optionB=$row2['optionB'];
$optionC=$row2['optionC'];
$optionD=$row2['optionD'];
$answer=$row2['answer'];
$score=$row2['score'];
$analyse=$row2['analyse'];
$endtime=$row2['endtime'];

//输出
echo '&nbsp;',$t_num+1,'.&nbsp;',$questionText,'<br /><br />','&nbsp;&nbsp;','<input type="radio"  name="',$t_num,'"value="A" />&nbsp;A&nbsp;';
echo $optionA,'<br /><br />','&nbsp;&nbsp;','<input type="radio" name="',$t_num,'" value="B" />&nbsp;B&nbsp;';
echo $optionB,'<br /><br />','&nbsp;&nbsp;','<input type="radio"  name="',$t_num,'"value="C" />&nbsp;C&nbsp;';
echo $optionC,'<br /><br />','&nbsp;&nbsp;','<input type="radio" name="',$t_num,'"value="D" />&nbsp;D&nbsp;';
echo $optionD;
echo '<br /><br />';

$t_num++;
}           //while循环结束的括号
 echo '<p align="center"><input type="submit" name="submitwe" id="submitwe" value="subimt" ></p><br/></form>';
}             //if结束的括号

echo '</div></div>';



//include('../templates/footer.html');
?>

<!--计时器-->

<div id="div1" style="display:none;"><?php echo $endtime; ?></div>
<div id="top"></div>