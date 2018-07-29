<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./conn.php');


$sql = "select * from msg1";
$rs = mysql_query($sql);

$data = array();
while($row = mysql_fetch_assoc($rs)) {
	$data[] = $row;
}
//print_r($data);

require('./meglist.html');

?>