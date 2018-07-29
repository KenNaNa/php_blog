<?php 
	$var = '{
		"name":"Kan",
		"age":20,
		"city":"广东中山"
	}';

	var_dump( json_decode($var) );
	echo "<br/>";
	var_dump( json_decode($var ,true) );
	echo "<br/>";
?>