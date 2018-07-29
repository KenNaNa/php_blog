<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		p{
			background: yellow;
		}
	</style>
</head>
<body>
<ul>
	<li>类使用 class 关键字后加上类名定义。</li>
	<li>类名后的一对大括号({})内可以定义变量和方法。</li>
	<li>类的变量使用 var 来声明, 变量也可以初始化值。</li>
	<li>函数定义类似 PHP 函数的定义，但函数只能通过该类及其实例化的对象访问。</li>
</ul>
<?php  
	/**
	*  一个Car类
	*/
	class Car{
		var $var1;
		var $var2 = "constant string";

		function myfunc($arg1,$arg2){

		}
	}
?>	
<p>类的实例</p>
<?php  
	class Site{
			// 成员变量
		var $url;
		var $title;

		// 成员函数
		function setUrl($par){
			$this->url = $par;
		}

		function getUrl(){
			echo $this->url . PHP_EOL;
		}

		function setTitle($par){
			$this->title = $par;
		}

		function getTitle(){
			echo $this->title . PHP_EOL;
		}
		// 变量 $this 代表自身的对象。
		// PHP_EOL 为换行符。
		}
?>
<p>PHP 中创建对象</p>
<p>类创建后，我们可以使用 new 运算符来实例化该类的对象：</p>
<?php  
	$php = new Site;
	$taobao = new Site;
	$google = new Site;
?>
<p>调用成员方法</p>
<p>在实例化对象后，我们可以使用该对象调用成员方法，该对象的成员方法只能操作该对象的成员变量</p>
<?php  
	// 调用成员函数，设置标题和URL
	$php->setTitle("php中文网");
	$taobao->setTitle("淘宝");
	$google->setUrl("Google 搜索");


	$php->setUrl("www.php.cn");
	$taobao->setUrl("www.taobao.com");
	$google->setUrl("www.google.com");

	// 调用成员函数，获取标题和URL
	$php->getTitle();
	$taobao->getTitle();
	$google->getTitle();

	$php->getUrl();
	$taobao->getUrl();
	$google->getUrl();
?>
<p>PHP 构造函数
构造函数 ，是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。</p>

<?php  
	class Site1 {
	  /* 成员变量 */
	  var $url;
	  var $title;

	  function __construct( $par1, $par2 ) {
	    $this->url = $par1;
	    $this->title = $par2;
	  }
	  /* 成员函数 */
	  function setUrl($par){
	     $this->url = $par;
	  }
	  
	  function getUrl(){
	     echo $this->url . PHP_EOL;
	  }
	  
	  function setTitle($par){
	     $this->title = $par;
	  }
	  
	  function getTitle(){
	     echo $this->title . PHP_EOL;
	  }
	}

	$php = new Site1('www.php.cn', 'php中文网'); 
	$taobao = new Site1('www.taobao.com', '淘宝'); 
	$google = new Site1('www.google.com', 'Google 搜索'); 

	// 调用成员函数，获取标题和URL 
	$php->getTitle(); 
	$taobao->getTitle(); 
	$google->getTitle(); 

	$php->getUrl(); 
	$taobao->getUrl(); 
	$google->getUrl();
?>
<p>析构函数
析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。</p>
<?php
class MyDestructableClass {
   function __construct() {
       print "构造函数\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "销毁 " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
?>
<p><h1>继承</h1>
PHP 使用关键字 extends 来继承一个类，PHP 不支持多继承</p>
<!-- <?php  
	// class Child extends Parent {
	//    // 代码部分
	// }
?> -->

<p><h1>实例</h1>
实例中 Child_Site 类继承了 Site 类，并扩展了功能</p>
<?php  
	// 子类扩展站点类别
	class Child_Site extends Site {
		var $category;

		function setCate($par){
			$this->category = $par;
		}

		function gaetCate(){
			echo $this->category . "<br/>";
		}
	}
?>
</body>
</html>