<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//包含数据库连接文件
include('../templates/conn.php');

//查询id，生成新id
$eid = $_POST['eid'];
$check_query = mysql_query("select  eid  from testpaper ORDER BY eid  DESC limit 1");
if($result = mysql_fetch_array($check_query))
{
	$start_time = $_POST['start'];
	$end_time = $_POST['end'];
	$sql = "update testpaper set starttime = '$start_time',endtime = '$end_time' where eid = '$eid'";
	if(mysql_query($sql,$conn))
	{
		exit('<h2 align="center">试卷修改成功！点击此处<a href="search.php">查看</a></h2>');
	} 
	else
	{
		echo '抱歉！添加数据失败：',mysql_error(),'<br />';
		echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
	}
}
?>
</body>
</html>