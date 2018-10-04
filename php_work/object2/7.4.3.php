<?php  
	class People{
		// 声明静态变量
		public static $age = 18;
		// public function __construct($age){
		// 	People::$age = $age;
		// }

		// 获取类的静态变量
		function get(){
			return self::$age;
		}
		// 设置类的静态变量
		function set($value){
			self::$age = $value;
		}
	}
	// 实例化一个$p  对象
	// 用这个对象来修改 静态变量
	$p = new People();
	$p->set(20);

	// 使用另一个对象来获取
	// 修改后的 静态变量属性
	// 发现改变了
	// 说明所有对象公用这个静态属性变量
	$p1 = new People();
	echo $p1->get();//20

?>