<?php

$username = ($_POST['username']);


//�������ݿ������ļ�
include('../templates/conn.php');
//����û����������Ƿ���ȷ
$check_query = mysql_query("select * from user where username='$username' limit 1");
if($result = mysql_fetch_array($check_query)){

$sql = "DELETE FROM testpaper WHERE username = '$username'";
mysql_query($sql,$conn);
exit('<h2 align="center">ɾ���ɹ��� ����˴� <a href="javascript:history.back(-1);">����</a></h2>');
echo '����˴� <a href="javascript:history.back(-1);">����</a> ';
}
else {
echo "û��Ҫɾ������Ϣ";
echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}

?>