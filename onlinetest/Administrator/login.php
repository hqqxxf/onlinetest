<?php
	session_start();
	
	//��¼
	if(!isset($_POST['submit'])){
		exit('�Ƿ�����!');
	}
	$adminname = htmlspecialchars($_POST['username']);
	//����
	$adminpassword =MD5($_POST['password']);
	//���ݿ��������Գ���Ҫ�㹻����Ȼ�������֤����	
	
	
	//�������ݿ������ļ�
	include('../templates/conn.php');
	//����û����������Ƿ���ȷ
	$check_query = mysql_query("select aid from admin where adminname='$adminname' and adminpassword='$adminpassword' limit 1");
	
	
	if($result = mysql_fetch_array($check_query)){
		//��¼�ɹ�
		$_SESSION['adminname'] = $adminname;
		$_SESSION['aid'] = $result['aid'];
		echo $adminname,' ��ӭ�㣡���� <a href="../Admin_main/index.php">��������</a><br/>';
		echo '����˴� <a href="logout.php?action=logout">ע��</a> ��¼��<br />';
		exit;
	}
	else {
		exit('��¼ʧ�ܣ�����˴� <a href="javascript:history.back(-1);">����</a> ����');
	}

?>