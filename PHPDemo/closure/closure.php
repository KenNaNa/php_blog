<?php  
	function demo(){
		$a = 10;
		$b = 20;
		$one = function($str) use($a, $b){//变量只是传值，而不是传地址

			echo $str."<br/>";
			
			$a++;

			echo $a."<br/>";//11
		};
		echo $a;//10
		return $one;
	}

	$var = demo();
	$var('Ken');
	$var("age");
	$var('KenNaNa');
?>