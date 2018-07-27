<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

require('./lib/init.php');
$art_id = $_GET['art_id'];

//判断地址栏传来的art_id 是否合法
if(!is_numeric($art_id)) {
	header('Location: index.php');
}

//如果没有这篇文章 跳转到首页去
$sql = "select * from art where art_id=$art_id";
if(!mGetRow($sql)) {
	header('Location: index.php');
}

//查询文章
$sql = "select title,content,pubtime,catname,comm from art inner join cat on art.cat_id=cat.cat_id where art_id=$art_id";
$art = mGetRow($sql);
//print_r($art);exit();


require(ROOT . '/view/front/art.html');

?>