<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./conn.php');

//地址栏获取id
$id = $_GET['id'];

if(empty($_POST)) {
	//获取原留言内容
	$sql = "select * from msg1 where id=$id";
	$rs = mysql_query($sql);
	$row = mysql_fetch_assoc($rs);
	//print_r($row);
	//exit();
	require('./msgedit.html');
} else {
	$sql = "update msg1 set name='$_POST[name]',email='$_POST[email]',content='$_POST[content]' where id=$id";
	if(!mysql_query($sql)) {
		echo '修改失败';
	} else {
		echo '修改成功';
	}
}

?>