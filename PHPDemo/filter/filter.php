<?php  
	$int = 100;
	if(!filter_var($int, FILTER_VALIDATE_INT)){
		echo "这是一个非法的整数";
	}else{
		echo "这是一个合适的整数";
	}
?>