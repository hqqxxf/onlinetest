<?php

if(!isset($_POST['submit'])){
	exit('�Ƿ�����!');
}
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//ע����Ϣ�ж�
if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
	exit('�����û��������Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if(strlen($password) < 6){
	exit('�������볤�Ȳ����Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('���󣺵��������ʽ����<a href="javascript:history.back(-1);">����</a>');
}
//�������ݿ������ļ�
include('../templates/conn.php');
//����û����Ƿ��Ѿ�����
$check_query = mysql_query("select uid from user where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
	echo '�����û��� ',$username,' �Ѵ��ڡ�<a href="javascript:history.back(-1);">����</a>';
	exit;
}
//д������
$password = MD5($password);

//$regdate = time();
$regdate=date('y-m-d h:i:s',time());
echo $regdate;
$sql = "INSERT INTO user(username,password,email,regdate)VALUES('$username','$password','$email','$regdate')";
if(mysql_query($sql,$conn)){
	exit('<h2 align="center">�û�ע��ɹ�������˴� <a href="login.html">��¼</a></h2>');
} else {
	echo '��Ǹ���������ʧ�ܣ�',mysql_error(),'<br />';
	echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}
?>
