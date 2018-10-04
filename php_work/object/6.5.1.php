<?php  
	class Cal{
		public $n;//参数
		private $sum;//计算和
		private $m;//计算乘积

		function __construct($n){
			$this->n = $n;
			$this->sum = 0;
			$this->m = 1;
		}
		// 实现1到n的叠加
		public function mAdd(){
			// 传进来参数小于等于0
			// 直接返回0
			if($this->n <= 0){
				return 0;
			}
			// 叠加
			for($i = 1;$i <= $this->n; $i++){
				$this->sum += $i;
			}

			return $this->sum;
		}

		// 实现1到n的阶乘
		public function mCji(){
			// 传进来的参数小于等于1
			// 直接返回1
			if($this->n <= 1){
				return 1;
			}
			// 阶乘
			for($i=1; $i <= $this->n; $i++){
				$this->m *= $i;
			}

			return $this->m;
		}
	}


	$c = new Cal(10);
	echo "叠加和结果为".$c->mAdd();


	echo "<br>";

	echo "阶乘结果为".$c->mCji(10);
?>
