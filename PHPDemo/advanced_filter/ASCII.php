<?php  
	$str = "<h1>Hello WorldÆØÅ!</h1>";

	$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	echo $newstr;
?>