<?php  
	include('./smarty-3.1.32/smarty-3.1.32/libs/Smarty.class.php');

	$sm = new Smarty();
	$sm->template_dir='./dir';
	$n = 5;
	$arr = array(
		array('id'=>1,'title'=>"Ken娜娜"),
		array('id'=>2,'title'=>"Ken娜娜"),
		array('id'=>3,'title'=>"Ken娜娜"),
		array('id'=>4,'title'=>"Ken娜娜"),
		array('id'=>5,'title'=>"Ken娜娜"),
	);
	$sm->assign('n',$n);
	$sm->assign('arr',$arr);
	$sm->display("3.html");
?>