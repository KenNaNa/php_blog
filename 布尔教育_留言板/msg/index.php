<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//require('./index.html');
//print_r($_POST);
//var_dump(empty($_POST));
require('./conn.php');

if(empty($_POST)) {
	require('./index.html');
} else {
	$sql = "insert into msg1 (name,email,content) values ('$_POST[name]' , '$_POST[email]' , '$_POST[content]')";
	//echo $sql;
	if(!mysql_query($sql)) {
		echo mysql_error();
		exit();
	} else {
		echo '留言成功';
	}
}


?>