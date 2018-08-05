<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./conn.php');

$id = $_GET['id'];

$sql = "delete from message where id=$id";
if(!mysql_query($sql)) {
	echo '删除失败';
} else {
	//echo '删除成功';
	header("Location: msglist.php");
}

?>