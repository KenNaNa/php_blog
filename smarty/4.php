<?php  
	include('./smarty-3.1.32/smarty-3.1.32/libs/Smarty.class.php');

	$sm = new Smarty();
	$sm->template_dir='./dir';
	$sm-force_compile=true;

	$sm->assign('k','Ken');
	$sm->display('4.html');
	// echo $sm->fetch('5.html');
?>