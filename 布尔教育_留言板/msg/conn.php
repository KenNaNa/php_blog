<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

header("Content-type:text/html;charset='utf8'");

//连接数据库
$conn = mysql_connect('localhost' , 'root' , '');
mysql_query('set names utf8' , $conn);
mysql_query('use 1224php' , $conn);

?>