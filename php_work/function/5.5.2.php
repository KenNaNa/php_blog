<?php  
	function concatStr($str1,$str2){
		if(is_finite($str1) && is_finite($str2)){
			// 本来想用is_numberic()
			// 但是看了说明，感觉不妥
			// 就使用is_finite()
			return ;
		}
		return $str1.$str2;
	}

	echo concatStr("Ken ",'is good, 哈哈皮');
?>

<!-- 
	bool is_finite  ( float $val  )
	检查 val 是否是是本机平台上浮点数所允许范围中的一个合法的有限值。

	bool is_numeric  ( mixed  $var  )

	如果 var 是数字和数字字符串则返回 TRUE ，否则返回 FALSE 。 


	is_null — 检测变量是否为 NULL   


	描述

	bool is_null  ( mixed  $var  )

	如果 var 是 null  则返回 TRUE ，否则返回 FALSE 。 

	查看 NULL   类型获知变量什么时候被认为是 NULL ，而什么时候不是。


 -->