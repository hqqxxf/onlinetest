<?php

$b = 1;

//�������ݿ������ļ�
include('../templates/conn.php');

//��ѯid��������id
$check_query = mysql_query("select  eid  from testpaper ORDER BY eid  DESC limit 1");

if($result = mysql_fetch_array($check_query)){
$eid = $result['eid'];
$eid = $eid+1;
}
else 
$eid = 1;	
	
	

$papername = $_POST['papername'];
$degree = 5;
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];

for($i = 1; $i<=20; $i++){

$question = $_POST['question'.$i];
$A = $_POST['A'.$i];
$B = $_POST['B'.$i];
$C = $_POST['C'.$i];
$D = $_POST['D'.$i];
$answer = $_POST['answer'.$i];
$score = 5;

if(!isset($_POST['analyse'.$i]))
{
$analyse = $_POST['analyse'.$i];
}
else {
$analyse = null;
}

$qid = $i;



$sql = "INSERT INTO testpaper(eid,papername,qid,questionText,optionA,optionB,optionC,optionD,answer,score,analyse,degree,starttime,endtime)
VALUES('$eid','$papername','$qid','$question','$A','$B','$C','$D','$answer','$score','$analyse','$degree','$starttime','$endtime')";
if(!mysql_query($sql,$conn)){
$b = 0;
}



}

if($b == 1){
	exit('<h2 align="center">��ӳɹ��ɹ��� ����˴� <a href="javascript:history.back(-1);">����</a></h2>');
}
else {
	echo '��Ǹ���������ʧ�ܣ�',mysql_error(),'<br />';
	echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}


?>
