<?php  
	$str = 'txt hello, high, bom, mum';
	$pat = '/\b([a-z])\w+\1\b/';

	preg_match_all($pat,$str,$res);
	var_dump($res);
?>