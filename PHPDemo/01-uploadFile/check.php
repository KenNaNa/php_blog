<?php  
	// 获取文件扩展名
	function fileext($filename){
		return substr(strrchr($filename,'.'), 1);
	}

	// strchr截取指定字符的开始到结尾的字符串
	// substr是截取指定的字符串，从哪里开始截取
	
	// 生成随机文件名函数
	function random($length){
		$hash = "CR-";
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
		$max = strlen($chars) - 1;
		// 使用随机函数
		// mt_srand((double)microtime() * 1000);

		for($i=0; $i<$length; $i++){
			$hash .= $chars[rand(0,$max)];
		}

		return $hash;
	}
?>