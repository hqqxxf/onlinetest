<?php

$eid =  $_POST['delete'];

//�������ݿ������ļ�
include('../templates/conn.php');


//��ѯ
$check_query = mysql_query("select * from testpaper where eid='$eid'  ");


if($result = mysql_fetch_array($check_query)){

$sql = "DELETE FROM testpaper WHERE eid = '$eid'";
mysql_query($sql,$conn);
exit('<h2 align="center">ɾ���ɹ��� ����˴� <a href="javascript:history.back(-1);">����</a></h2>');
echo '����˴� <a href="javascript:history.back(-1);">����</a> ';
}
else {
echo "û��Ҫɾ������Ϣ";
echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}

	
	




?>
