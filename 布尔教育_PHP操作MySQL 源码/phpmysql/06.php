<meta charset="utf8">
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
$rs = mysql_query($sql);

/*print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_assoc($rs));
var_dump(mysql_fetch_assoc($rs));*/
while ($row = mysql_fetch_assoc($rs)) {
	print_r($row);
}

?>