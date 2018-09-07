<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$un = $_GET['un'];

$users = array('zhangsan' , 'lisi' , 'wangwu');
echo  in_array($un, $users) ? 1 : 0;
?>