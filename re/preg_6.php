<?php  
	$str = '老王，卖节操 联系13800138000，备用电话18902587413，QQ258963';
	$pat = '/\b1[3587]\d{9}\b/';

	preg_match_all($pat,$str,$res);
	var_dump($res);
?>