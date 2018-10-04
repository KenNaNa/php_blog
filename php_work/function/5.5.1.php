<?php  
	// 写一个函数实现从 1-n的乘积
	function m($n){
		$m = 1;
		for($i=1;$i<=$n;$i++){
			$m *= $i;
		}
		return $m;
	}

	echo "使用普通函数计算得 ".m(10);

	echo "<br/>";

	// 使用递归的方法
	function d($n){
		if($n==1 || $n==0){
			return 1;
		}

		return $n * d($n-1);
	}

	echo "使用递归函数计算得 ".d(10);
?>