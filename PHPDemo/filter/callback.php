<?php
	function convertSpace($string){
		return str_replace("_", ".", $string);
	}

	$string = "www_php_cn!";

	echo filter_var($string, FILTER_CALLBACK,
	array("options"=>"convertSpace"));
?>