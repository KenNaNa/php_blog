<?php  
	$int = 300;
	$option = array(
		"options"=>array(
			"min_range"=>200,
			"max_range"=>299
		)
	);
	// 就像上面的代码一样，选项必须放入一个名为 "options" 的相关数组中。如果使用标志，则不需在数组内。

	// 由于整数是 "300"，它不在指定的范围内，以上代码的输出将是：
	if(!filter_var($int, FILTER_VALIDATE_INT, $option)){
		echo "这是一个非法整数";
	}else{
		echo "这是一个合格的整数";
	}
?>