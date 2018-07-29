<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$conn = mysql_connect('localhost' , 'root' , '');
var_dump($conn);
mysql_set_charset('utf8' , $conn);
mysql_select_db('1224php' , $conn);


$sql = "insert into msg (title , content) values ('t1' , 'test1'),('t2' , 'test2'),('t3','test3')";
if(!($rs = mysql_query($sql))) {
	echo mysql_error();
	exit();
}
var_dump($rs);

//echo mysql_insert_id($conn);
//echo mysql_affected_rows($conn);

//mysql_close($conn);
//unset($conn);
//var_dump($conn);

unset($rs);
var_dump($rs);

?>