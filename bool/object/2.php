<?php  
	class Par{
		public function a(){
			echo "我是傅雷";
		}

		public function b(){}
		$this->a();
	}


	class Son extends Par{
		public function a(){
			echo "我是傅聪";
		}
	}

	$son = new Son();
	$son->b();//打印我是傅聪
?>