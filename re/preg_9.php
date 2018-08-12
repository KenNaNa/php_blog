<?php  
	$str = "李";
	$pat = '/^[\x{4e00}-\x{9fa5}]$/u';

	echo preg_match_all($pat, $str)?"纯的":"杂交";
?>