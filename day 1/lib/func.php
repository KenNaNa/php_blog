<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
/**
* 成功的提示信息
*/

function succ($res) {
	$result = 'succ';
	require(ROOT . '/view/admin/info.html');
	exit();
}

/**
* 失败返回的报错信息
*/

function error($res) {
	$result = 'fail';
	require(ROOT . '/view/admin/info.html');
	exit();
}

?>