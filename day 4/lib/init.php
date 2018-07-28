<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

header('Content-type:text/html;charset=utf8');
define('ROOT' , dirname(__DIR__));
/*echo __FILE__ , '<br>';
echo __LINE__;*/
require(ROOT . '/lib/mysql.php');
require(ROOT . '/lib/func.php');

$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);


?>