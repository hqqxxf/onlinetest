<?php

$eid =  $_POST['delete'];

//包含数据库连接文件
include('../templates/conn.php');


//查询
$check_query = mysql_query("select * from testpaper where eid='$eid'  ");


if($result = mysql_fetch_array($check_query)){

$sql = "DELETE FROM testpaper WHERE eid = '$eid'";
mysql_query($sql,$conn);
exit('<h2 align="center">删除成功！ 点击此处 <a href="javascript:history.back(-1);">返回</a></h2>');
echo '点击此处 <a href="javascript:history.back(-1);">返回</a> ';
}
else {
echo "没有要删除的信息";
echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}

	
	




?>
