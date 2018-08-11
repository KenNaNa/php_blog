<?php  
	include('./smarty-3.1.32/smarty-3.1.32/libs/Smarty.class.php');

	$sm = new Smarty();
	$sm->template_dir = './dir';
	$sm->left_delimiter = "<{";
	$sm->right_delimiter = "}>";

	$arr = ['a'=>"小明","b"=>"大红"];

	class Person{
		public function name(){
			return "Ken";
		}
	}

	$d = "这个雨季不再来了...";

	$p = new Person();

	$sm->assign('tit',$d);
	$sm->assign('arr',$arr);
	$sm->assign('obj',$p);	
	$sm->display('2.html');

	
	// $sm->display('2.html');
?>