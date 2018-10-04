<?php  
	class Person{
		// 定义一个表示年龄的变量，
		// 通过构造函数来初始化他
		public $age;
		public function __construct($age){
			$this->age = $age;
		}

		// 获取$age 属性
		public function get(){
			return $this->age;
		}

		// 设置 $age 属性
		public function set($value){
			$this->age = $value;
		}
	}

	// 实例化对象
	$p1 = new Person(18);
	var_dump($p1);//object(Person)#1 (1) { ["age"]=> int(18) }
	$p1->set(20);
	echo $p1->get();//20

	$p2 = new Person(18);
	echo $p2->get();//18
?>

<?php  
	class People{
		// 声明静态变量
		public static $age = 18;
		// public function __construct($age){
		// 	People::$age = $age;
		// }

		// 获取类的静态变量
		function get(){
			return People::$age;
		}
		// 设置类的静态变量
		function set($value){
			People::$age = $value;
		}
	}

	$p = new People();
	echo People::$age;//18
	var_dump($p);//object(People)#3 (0) { }

	// 设置值
	$p->set(20);

	// 获取值
	echo $p->get();//20

?>