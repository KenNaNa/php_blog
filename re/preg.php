<?php  
	$str = "hi his is this sthi";
	$pat = '/hi/';
	preg_match_all($pat,$str,$src);
	var_dump($src);
?>