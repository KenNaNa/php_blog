<?php  
	$arr = array('13800138000','13425477079','170235','12314564566545645654');
	$pat = '/^[0123456789]{11}$/';
	foreach ($arr as $key => $value) {
		preg_match_all($pat,$value,$res);
		var_dump($res);
	}
?>