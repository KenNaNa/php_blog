<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$conn = mysql_connect('localhost' , 'root' , '');
mysql_set_charset('utf8' , $conn);
mysql_select_db('1224php' , $conn);

//select 查询
$sql = "select * from msg";
var_dump(mysql_query($sql));

?>