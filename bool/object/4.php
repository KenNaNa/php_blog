<?php  
	class Par{
		public static function a(){
			echo "我是傅雷";
		}

		public static function b(){
			// 延迟绑定
			echo static::a();
		}
		
	}


	class Son extends Par{
		public static function a(){
			echo "我是傅聪";
		}
	}

	Son::b();//傅聪
?>