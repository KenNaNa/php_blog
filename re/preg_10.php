<?php  
	$str = 'hello,when i am working , do not coming';

	$pat = "/\b\w+(?=ing\b)/";
	preg_match_all($pat,$str,$res);

	print_r($res);
?>