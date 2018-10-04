<?php  
	// Note: 属性不能被定义为 final，只有类和方法才能被定义为 final。 
	class Person{
		// 外部不可查看，不可继承
		private $age = "100";
		// 可以被外部查看，但是不能被继承
		protected $height = '170cm';
		// 可以在外部访问，也可以继承
		public function canFish(){
			echo "我会钓鱼";
		}

		// 通过方法是想之类可以访问
		public function canVisitAge(){
			echo $this->age;
		}

		// 访问 protected 属性
		public function canVisitHeight(){
			echo $this->height;
		}
	}

	class Son extends Person{

	}

	$son = new Son();
	echo "<br/>";
	$son->canFish();
	echo "<br/>";
	$son->canVisitAge();
	echo "<br/>";
	$son->canVisitHeight();

?>