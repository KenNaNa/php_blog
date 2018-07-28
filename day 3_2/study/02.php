<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//192.168.111.100
//[0-255]

//echo $_SERVER['REMOTE_ADDR'];

$ip = '192.168.1.100';
var_dump($ip);
var_dump(sprintf( '%u', ip2long($ip)));

?>