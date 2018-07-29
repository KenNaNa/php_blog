<?php  
	$int = 120;
	$min = 1;
	$max = 200;
	if(!filter_var($int, FILTER_VALIDATE_INT, array('options'=>array("min_range"=>$min,"max_range"=>$max)))){
		echo '这个数字不在范围之内';
	}else{
		echo "这个数字在范围之内";\
	}
?>