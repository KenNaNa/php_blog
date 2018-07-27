<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
require('./lib/init.php');

$sql = 'select * from cat';
$cats = mGetAll($sql);
//print_r($cats);exit();

if(empty($_POST)) {
	include(ROOT . '/view/admin/artadd.html');
}else {
	//检测标题是否为空
	$art['title'] = trim($_POST['title']);
	if($art['title'] == '') {
		error('标题不能为空');
	}

	//检测栏目是否合法
	$art['cat_id'] = $_POST['cat_id'];
	if(!is_numeric($art['cat_id'])) {
		error('栏目不合法');
	}

	//检测内容是否为空
	$art['content'] = trim($_POST['content']);
	if($art['content'] == '') {
		error('内容不能为空');
	}

	//插入发布时间
	$art['pubtime'] = time();

	//插入内容到art表
	if(!mExec('art' , $art)) {
		error('文章发布失败');
	} else {
		succ('文章添加成功');
	}
}

?>