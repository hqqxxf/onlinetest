<?php
session_start();
//ע����¼
if($_GET['action'] == "logout"){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo 'ע����¼�ɹ�������˴� <a href="login.html">��¼</a></br><a href="../index.php">��ҳ<a>';
	exit;
}
?>