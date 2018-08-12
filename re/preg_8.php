<?php  
	$str='13800138000 , 13425477079';
	$pat = '/(\d{3})\d{4}(\d{4})/';
	echo preg_replace($pat,'\1****\2',$str);
?>