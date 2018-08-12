<?php  
	$str = 'baidu o2o b2b c2c heol xiling shuai chou bage';
	// $pat = '/\b[z-zA-Z]+\b/';
	// $pat = '/\b[a-zA-Z]{1,5}\b/';
	$pat = '/\W{1,}/';


	preg_match_all($pat,$str,$res);
	var_dump($res);
	
?>