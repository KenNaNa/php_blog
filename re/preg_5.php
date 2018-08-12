<?php  
	$str = 'a b     hello      world';
	// $pat = '/\b[z-zA-Z]+\b/';
	// $pat = '/\b[a-zA-Z]{1,5}\b/';
	$pat = '/\s{1,}/';
	echo preg_replace($pat, ' ', $str);


	preg_match_all($pat,$str,$res);
	var_dump($res);
	
?>