<meta charset='utf8'>
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$conn = mysql_connect('localhost' , 'root' , '');
mysql_query('use 1224php' , $conn);

//表示当前连接数据库客户端的字符集
mysql_query('set names utf8' , $conn);

$sql = "insert into msg (title,content) values ('$_POST[title]' , '$_POST[content]')";
//echo $sql;
if(mysql_query($sql , $conn)) {
	echo 'ok';
} else {
	echo 'false';
}

//print_r($_POST);

?>