<?php  
	$str = "hi his is this sthi";
	$pat = '/\bhi\b/';
	preg_match_all($pat,$str,$src);
	var_dump($src);
?>