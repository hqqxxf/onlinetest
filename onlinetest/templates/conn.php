<?php
/*****************************
*���ݿ�����
*****************************/
$conn = @mysql_connect("localhost","root","");
if (!$conn){
	die("�������ݿ�ʧ�ܣ�" . mysql_error());
}

mysql_select_db("onlinetest", $conn);
//�ַ�ת��������
mysql_query("set character set 'utf8'");
//д��
mysql_query("set names 'utf8'");
?>