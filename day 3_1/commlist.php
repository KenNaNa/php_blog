<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
$sql = "select * from comment";
$comms = mGetAll($sql);

//print_r($comms);

require(ROOT . '/view/admin/commlist.html');

?>