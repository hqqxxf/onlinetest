<?php
session_start();
//ע����¼
if($_GET['action'] == "logout"){
	 session_destroy();
	 
	echo 'ע���ɹ�������˴� <a href="login.html">��¼</a>';
	exit;
}
?>