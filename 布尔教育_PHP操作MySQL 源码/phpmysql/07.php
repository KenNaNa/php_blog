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

if(!$rs) {
	echo mysql_error();
	exit();
}

/*print_r(mysql_fetch_array($rs));
print_r(mysql_fetch_assoc($rs));
print_r(mysql_fetch_row($rs));*/

$data = array();
while($row = mysql_fetch_assoc($rs)) {
	$data[] = $row;
}

print_r($data);

//foreach($data )

?>