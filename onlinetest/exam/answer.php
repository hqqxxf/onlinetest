<?php
session_start();

//�����ϵͳ�ύ�����Զ��ύ
$s=1;
if(isset($_POST['submitwe']))//����ϵͳ�Զ��ύ
{
$s=0;
}


$eid=$_GET['action'] ;//ѡ����Ծ�
//�������ݿ������ļ�
include('../templates/conn.php');
$username=$_SESSION['username'];
$sqlrecord=mysql_query("select * from score where eid='$eid' and username='$username' limit 1");//��¼�����ԾͲ����ٿ���
if($row=mysql_num_rows($sqlrecord))
{
echo '<script type="text/javascript"Charset="utf-8"> alert("���Ѿ����Թ����Ծ��������ٲ����ˣ�");history.back(); </script>';exit;
}


$score=0;
//�����Ƿ���ȷ

$check_query = mysql_query("select answer from testpaper where eid=1  limit 20");
$i = 0;

while($result = mysql_fetch_array($check_query)){
$ans=$result['answer'];


if(empty($_POST[$i])&&$s==0)//��ѡ��Ϊ��ʱ�����ؿ���ҳ�棬��ʾ������û������
{echo '<script type="text/javascript"Charset="utf-8"> alert("��δ����");history.back(); </script>';exit;}

if(empty($_POST[$i])) 
{
$i++;
}

else if($ans==$_POST[$i])
{$score+=5;
$i++;}
}

echo '�÷֣�',$score;
//$username=$_SESSION['username'];
$enddate=date('y-m-d h:i:s',time());

$question_query = mysql_query("select stexamtime from record where eid='$eid' and   username='$username'");
$row2=mysql_fetch_array($question_query);
$startime=$row2['stexamtime'];
//echo ' ',$startime;//����
$sql = "INSERT INTO score(username,eid,mark,stexamtime,endtime)VALUES('$username','$eid','$score','$startime','$enddate')";
mysql_query($sql,$conn);
echo '<br/><a href="../index.php">������ҳ</a>&nbsp;<a href="../user/my.php">�����������</a>';

?>