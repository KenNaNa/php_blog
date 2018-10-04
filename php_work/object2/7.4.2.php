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

	$p = new People();
	echo People::$age;//18
	var_dump($p);//object(People)#3 (0) { }

	// 设置值
	$p->set(20);

	// 获取值
	echo $p->get();//20

	echo "<br/>";
	// 单体模式
	class Simple{
		// 声明一个私有的静态变量
		// 用于存储单体对象
		private static $simpleInstance = null;

		// 实例化对象
		// 通常如果关键字为 public 默认是可以省略不写的
		function __construct(){
			echo "已经实例化对象";
		}

		static public function getInstance(){
			// 判断对象是否是Simple类的实例
			// 如果不是，就实例化对象
			// 赋值给这个静态变量
			// Simple对象可用 self 代替
			// 这样就比较可以看的懂了
			if(!(self::$simpleInstance instanceof Simple)){
				self::$simpleInstance = new Simple();
			}
			// 最后返回这个实例化静态变量
			return self::$simpleInstance;
		}
	}

	$sim = Simple::getInstance();
	echo "<br/>";
	var_dump($sim);
?>