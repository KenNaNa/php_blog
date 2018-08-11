<?php  

	include('./smarty-3.1.32/smarty-3.1.32/libs/Smarty.class.php');

	$sm = new Smarty();
	$sm->template_dir='./dir';
	$sm->caching=true;
	$sm->cache_lifetime=120;
	$a = '124';
	$b = "abj";

	if(!$sm->isCached('5.html',$id)){
		$sm->assign('a',$a);
		echo 124566;
	}

	$sm->assign('a',$a);
	$sm->display('5.html');
?>