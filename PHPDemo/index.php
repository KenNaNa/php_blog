<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		body,html{
			width: 100%;
			margin: 0;
			padding: 10px;
			overflow: auto;
		}
		.box{
			width: 100px;
			height: 30px;
			background: green;
			text-align: center;
			color: #fff;
			line-height: 30px;
		}
		ul{
			margin:0;
			padding:0;
			width:100%;
			-webkit-padding-start:0;
			height: 30px;
		}

		ul li{
			list-style: none;
			margin:0;
			padding:0;
			width: 25%;
			height:30px;
			line-height: 30px;
			text-align:center;
			float: left;
			background: #333;
			color: #fff;
			cursor: pointer;
			transition: background,color 0.8s ease-in-out;

		}

		ul li:hover{
			color:#000;
			background: yellow;
		}
		p{
			font-size: 20px;
			font-weight: bold;
			background: yellow;
		}
	</style>
</head>
<body>
<!-- <p>__NAMESPACE__
当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。</p>
<?php
	// namespace MyProject;

	// echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
?> -->	

<ul>
	<?php
		$arr = array("我的主页","登录","注册","关于");
		$class = array("home","login","register","about");
		$len = count($arr);

		for($x=0;$x<$len;$x++){
			echo "<li>";
			echo $arr[$x];
			echo "</li>";
		}
	?>
</ul>


<?php
	$x = 5;
	$y = 6;
	$z = $x + $y;
	echo $z;

	// for($x=0;$x<10;$x++){
	// 	echo "<div class='box'>
	// 		你好啊
	// 	</div>";
	// }
?>	

<?php
	// 全局变量
	$c = 6666;
	function test(){
		// $x为局部变量
		for($x=0;$x<10;$x++){
			echo "<div class='box'>
				你好啊
			</div>";
		}
	}
	test();
?>

<?php
	echo "<p>测试函数外变量:<p>"; 
	echo "变量 x 为: $x"; 
	echo "<br>"; 
	echo "变量 y 为: $y"; 
?>

<?php
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
	echo "变量 x 为: $x"; 
	$x = 5;
	

	echo $x;
	$y = 7;
	echo "<br/>";
	$x = "text";
	echo "变量 x 为: $x"; 
	echo $x;
?>

<?php
	// 全局变量
	// 有点神奇啊
	// 就是在函数中访问全局变量需要加上global等字眼
	// 字符串链接用.符号
	
	// $username = "ken";

	// function printtext(){
	//         global $username;
	//         $n = print($username);
	//         echo "<br/>";
	//         echo "print()函数的返回值是".$n;

	// }
	
	// 
	function printtext(){
		global $username;
		$username = "ken";
		$n = print($username);
		echo "<br/>";
		echo "print()函数的返回值是".$n;

	}

	printtext();
	print_r($username);
	// 你可以在不同函数中使用相同的变量名称，因为这些函数内定义的变量名是局部变量，只作用于该函数内。
?>

<?php
	// 获取众多全局的
	// $GLOBALS
	$p = 123;
	$pp = 456;
	$ppp = 789;

	print($GLOBALS);
	// 
	print_r($GLOBALS);
	print_r(" ");
	print($GLOBALS['p']);
	print_r($GLOBALS['ppp']);
	print_r($GLOBALS["pp"]);
?>

<p>
/**
 * Static 作用域
 * 当一个函数完成时，它的所有变量通常都会被删除。
 * 然而，有时候您希望某个局部变量不要被删除。
 * 要做到这一点，请在您第一次声明变量时使用 static 关键字：
 */
</p>
<?php
/**
 * Static 作用域
 * 当一个函数完成时，它的所有变量通常都会被删除。
 * 然而，有时候您希望某个局部变量不要被删除。
 * 要做到这一点，请在您第一次声明变量时使用 static 关键字：
 */
 function printUsername(){
 	static $n = 0;
 	$n ++;
 	echo "$n\r";
 	echo "<br/>";

 	$c = 10;
 	$c++;
 	echo "<br/>";
 	echo $c;
 	echo "<br/>";
 }
printUsername();
printUsername();
printUsername();
?>

<?php
	// 什么叫做 静态变量呢
	// 可以这么理解就是 函数在每次调用的是你声明的静态变量他的内存的地址是固定不变的
	// 也就是说他的值被保存下来了

	// 而 动态变量就是
	// 函数每次调用都会去给这个变量分配内存，值也同时被销毁了
	// 这样每次调用打印出的值都刚开始初始化的那个值一个样
	// 然后，每次调用该函数时，该变量将会保留着函数前一次被调用时的值。
	// 注释：该变量仍然是函数的局部变量。
	static $v = 0;
	function test1(){
		global $v;
		$v++;
		echo "<br/>";
		echo $v;
	}

	test1();
	test1();
	test1();
	test1();
?>

<?php
	// 参数作用域 
	// 参数是通过调用代码将值传递给函数的局部变量。
	// 参数是在参数列表中声明的，作为函数声明的一部分：
	function printU($x){
		echo "<br/>";
		print($x);
		echo "<br/>";
	}

	printU("我的名字就是Ken");
?>

<?php
	echo "<a target='_blank' href="?><?php echo ('https://www.baidu.com/'); echo ">百度</a>";
	print "<h2>PHP is fun!</h2>";
?>

<?php
	// 字符串
	// 字符串也像javascript一样不会限定用单引号，还是双引号括起来
	echo "弄死php";
	echo "<br/>";
	echo "怕死要被弄死啊";

	// setlocale(LC_TIME, "C");
	// echo strftime("%A");
	// setlocale(LC_TIME, "fi_FI");
	// echo strftime(" in Finnish is %A,");
	// setlocale(LC_TIME, "fr_FR");
	// echo strftime(" in French %A and");
	// setlocale(LC_TIME, "de_DE");
	// echo strftime(" in German %A.\n");
	// 从字符串中去除 HTML 和 PHP 标记
	$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
	echo strip_tags($text);
	echo "\n";

	// 允许 <p> 和 <a>
	echo strip_tags($text, '<p><a>');

?>

<p>Example #1 stripos() 范例</p>



<?php
	$findme    = 'a';
	$mystring1 = 'xyz';
	$mystring2 = 'ABC';

	$pos1 = stripos($mystring1, $findme);
	$pos2 = stripos($mystring2, $findme);

	// 'a' 当然不在 'xyz' 中
	if ($pos1 === false) {
    	echo "The string '$findme' was not found in the string '$mystring1'";
    	echo "<br/>";
	}

	// 注意这里使用的是 ===。简单的 == 不能像我们期望的那样工作，
	// 因为 'a' 的位置是 0（第一个字符）。
	if ($pos2 !== false) {
    	echo "We found '$findme' in '$mystring2' at position $pos2";
	}
?> 

<?php
	$username = "ken";
	$age = 20;
	echo "<br/>";
	echo "the boy's name is '$username', his age is '$age'";
	echo "<br/>";
	echo "the boy's name is $username, his age is $age";
?>
<?php
	$username = "Ken";
	$age = 20;
	echo "<br/>";
	echo "the boy's name is ".$username.", his age is ".$age;
?>
<p>Example #1 stristr() 范例</p>
<?php 

	$email = 'USER@EXAMPLE.com';
  	echo stristr($email, 'e'); // 输出 ER@EXAMPLE.com  第三个参数默认为false
  	echo "<br/>";
  	echo stristr($email, 'e', true); // 自 PHP 5.3.0 起，输出 US
?>
<p>Example #1 strlen() 范例</p>
<?php  
	$str = 'abcdef';
	echo strlen($str); // 6
	$str = ' ab cd ';
	echo "<br/>";
	echo strlen($str); // 7
	// count用来计算数组的长度的
	echo count($str);//1
?>

<p>strpos — 查找字符串首次出现的位置</p>
<?php  
	$mystring = 'abc';
	$findme   = 'a';
	$pos = strpos($mystring, $findme);

	// 注意这里使用的是 ===。简单的 == 不能像我们期待的那样工作，
	// 因为 'a' 是第 0 位置上的（第一个）字符。
	if ($pos === false) {

    	echo "The string '$findme' was not found in the string '$mystring'";
	} else {
    	echo "The string '$findme' was found in the string '$mystring'";
    	echo " and exists at position $pos";
	}
?>
<?php  
	$user = "Ken";
	if(true){
		$age = 20;
		echo "<br/>";
		echo "$user";
	}

	echo $age;
?>

<?php
    echo "<br/>";
	for($x=0;$x<10;$x++){
		$user = "ken";
		print($x);
	}

	print($x);
	print($user);
?>
<?php  
	$age = 20;
	switch ('o') {
		case 'o':
			# code...
			print('<br/>');
			print('o');
			print('<br/>');
			print($age);
			print('<br/>');
			$user = "Ken";
			break;
		
		default:
			# code...
			print('default');
			print('<br/>');
			break;
	}

	print($user);
?>

<?php
	$x = 10;
	$str = "Ken";
	$arr = ["Ken","ages"];
	$a = array(1, 2, array("a", "b", "c"));
	print("<br/>");
	print(var_dump($x));//int(10)
	print("<br/>");
	print(var_dump($str));
	print("<br/>");
	print($str[0]);
	print("<br/>");
	print(var_dump($arr));
	print("<br/>");
	print(var_dump($a));//array(3) { [0]=> int(1) [1]=> int(2) [2]=> array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" } }

?>

<?php  
	$x = 5985;
	var_dump($x);
	echo "<br>"; 
	$x = -345; // 负数 
	var_dump($x);
	echo "<br>"; 
	$x = 0x8C; // 十六进制数
	var_dump($x);
	echo "<br>";
	$x = 047; // 八进制数
	var_dump($x);
?>

<?php  

	$rest = substr("abcdef", -1);    // 返回 "f"
	print("<br/>");
	print($rest);
	$rest = substr("abcdef", -2);    // 返回 "ef"
	print("<br/>");
	print($rest);
	$rest = substr("abcdef", -3, 1); // 返回 "d"
	print("<br/>");
	print($rest);

?>

<?php
	$rest = substr("abcdef", 0, -1);  // 返回 "abcde"
	$rest = substr("abcdef", 2, -1);  // 返回 "cde"
	$rest = substr("abcdef", 4, -4);  // 返回 ""
	$rest = substr("abcdef", -3, -1); // 返回 "de"

?> 

<?php
	$x=true;
	$y=false;
	print($x);
	print($y);
?>

<?php
	$arr = Array("你好啊","你好啊");
	print(var_dump($arr));
?>

<?php
	class Person{
		// var $color;
		function Person($color='red'){
			$this->color = $color;
		}
		function what_color(){
			return $this->color;
		}
	}

	function print_vars($obj) {
	   print_r($obj);
	   foreach (get_object_vars($obj) as $prop => $val) {
	     echo "\t$prop = $val\n";
	   }
	}

	$herbie = new Person("white");
	// show herbie properties
	echo "\herbie: Properties\n";
	print_vars($herbie);
?>

<?php
	$x="Hello world!";
	$x=null;
	print("<br/>");
	var_dump($x);
?>

<?php
	// 定义常量
	// 是区分大小写的
	// javascript在es6中我们定义常量的时候用const
	// 在PHP中我们用的是 define
	define("GREETING","http://www.baidu.com/");
	echo "<a href=".GREETING."title=''>百度</a>";
	echo "<br/>";
?>
<p>以下实例我们创建一个 不区分大小写的常量, 常量值为 "欢迎访问 php.cn"：</p>

<?php
	// 不区分大小写的常量名
	define("GREETING", "欢迎访问 php.cn", true);
	echo greeting;  // 输出 "欢迎访问 php.cn"
?>

<?php
	// 常量是全局的
	// 常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
	//以下实例演示了在函数内使用常量，即便常量定义在函数外也可以正常使用常量
	
?>
<?php
	define("GREETING1", "欢迎访问 php.cn");

	function myTest() {
	    echo GREETING1;
	}
	 
	myTest();    // 输出 "欢迎访问 php.cn"
?>

<?php
	

	function myTest1() {
		define("GREETING2", "欢迎访问 php.cn");
	    echo GREETING2;
	}
	echo "<br/>";
	myTest1();
	echo "<br/>";    // 输出 "欢迎访问 php.cn"
	echo "cuowu".GREETING2; 
?>

<p>PHP字符串 	注释：当您赋一个文本值给变量时，请记得给文本值加上单引号或者双引号。</p>
<?php  
	$text = "北京";
	echo $text;
	echo "<br/>";
	print(var_dump($text));
?>

<p>
<h1>PHP 并置运算符</h1>
在 PHP 中，只有一个字符串运算符。

并置运算符 (.) 用于把两个字符串值连接起来。	
</p>

<?php  
	$username = "Ken";
	$age = 20;
	echo "his name is ".$username." his age is ".$age;
	echo "<br/>";
?>

<p>
<h1>PHP strlen() 函数</h1>
有时知道字符串值的长度是很有用的。
strlen() 函数返回字符串的长度（字符数）。
</p>
<?php  
	echo strlen("his name is Ken , his age is 20");
?>

<?php  
	function countLength($str){
		for($i=0;$i<strlen($str);$i++){
			print($str[$i]);
			print("<br/>");
		}
	}

	countLength("his name is Ken , his age is 20");
?>
<p>
<h1>PHP strpos() 函数</h1>
strpos() 函数用于在字符串内查找一个字符或一段指定的文本。

如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
</p>

<?php  
	echo strpos("Ken is good","Ken");
?>
<p>PHP 算术运算符</p>
<?php  
	$x=10; 
	$y=6;
	echo ($x + $y); // 输出16
	echo "<br>";
	echo ($x - $y); // 输出4
	echo "<br>";
	echo ($x * $y); // 输出60
	echo "<br>";
	echo ($x / $y); // 输出1.6666666666667
	echo "<br>"; 
	echo ($x % $y); // 输出4 
?>
<?php 
	$x=10; 
	echo $x; // 输出10
	echo "<br>";
	$y=20; 
	$y += 100;
	echo $y; // 输出120
	echo "<br>";
	$z=50;
	$z -= 25;
	echo $z; // 输出25
	echo "<br>";
	$i=5;
	$i *= 6;
	echo $i; // 输出30
	echo "<br>";
	$j=10;
	$j /= 5;
	echo $j; // 输出2
	echo "<br>";
	$k=15;
	$k %= 4;
	echo $k; // 输出3
?>

<p>PHP7+ 版本新增整除运算符 intdiv(),使用实例：</p>
<?php  
	// var_dump(intdiv(10,3));
?>
<p>递增与递减</p>
<?php
	$x=10; 
	echo ++$x; // 输出11
	echo "<br>";
	$y=10; 
	echo $y++; // 输出10
	echo "<br>";
	$z=5;
	echo --$z; // 输出4
	echo "<br>";
	$i=5;
	echo $i--; // 输出5
?>

<p>PHP 比较运算符</p>
<?php
	$x=100; 
	$y="100";

	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x !== $y);
	echo "<br>";

	$a=50;
	$b=90;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
?>

<p>比较运算符</p>
<?php
	$x = array("a" => "red", "b" => "green"); 
	$y = array("c" => "blue", "d" => "yellow"); 
	$z = $x + $y; // $x 和 $y 数组合并
	var_dump($z);
	echo "<br>";
	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x <> $y);
	echo "<br>";
	var_dump($x !== $y);
?>

<p>以下实例中通过判断 $_GET 请求中含有 user 值，如果有返回 $_GET['user']，否则返回 nobody：</p>
<?php
	$test = 'php中文网';
	// isset — 检测变量是否设置
	// 普通写法
	$username = isset($test) ? $test : 'nobody';
	echo $username, PHP_EOL;

	// PHP 5.3+ 版本写法
	$username = $test ?: 'nobody';
	echo $username, PHP_EOL;
?>
<p>注意：PHP_EOL 是一个换行符，兼容更大平台。

在 PHP7+ 版本多了一个 NULL 合并运算符，实例如下：</p>

<?php
	// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
	// $username = $_GET['user'] ?? 'nobody';
	// 类似的三元运算符
	$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
?>

<p>PHP7+支持组合比较</p>
<?php
	// // 整型
	// echo 1 <=> 1; // 0
	// echo 1 <=> 2; // -1
	// echo 2 <=> 1; // 1

	// // 浮点型
	// echo 1.5 <=> 1.5; // 0
	// echo 1.5 <=> 2.5; // -1
	// echo 2.5 <=> 1.5; // 1
	 
	// // 字符串
	// echo "a" <=> "a"; // 0
	// echo "a" <=> "b"; // -1
	// echo "b" <=> "a"; // 1
?>

<?php  
	echo "Ken hello";
	echo "\n";
	echo "\r";
	echo "hello";
?>
<p>条件语句</p>
<?php 	
	$t=date("H");
	print($t);
	if ($t<"20")
	{
    	echo "Have a good day!";
	}
?>
<?php
	$t=date("H");
	if ($t<"20")
	{
    	echo "Have a good day!";
	}
	else
	{
    	echo "Have a good night!";
	}
?>

<?php
	$t=date("H");
	if ($t<"10")
	{
	    echo "Have a good morning!";
	}
	else if ($t<"20")
	{
	    echo "Have a good day!";
	}
	else
	{
	    echo "Have a good night!";
	}
?>
<p>PHP switch语句</p>
<?php
	$favcolor="red";
	switch ($favcolor)
	{
	case "red":
	    echo "你喜欢的颜色是红色!";
	    break;
	case "blue":
	    echo "你喜欢的颜色是蓝色!";
	    break;
	case "green":
	    echo "你喜欢的颜色是绿色!";
	    break;
	default:
	    echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
	}
?>
<p>PHP 数组</p>
<?php
	$cars=array("Volvo","BMW","Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

	// 数组是什么？
	// 数组是一个能在单个变量中存储多个值的特殊变量。
	$cars1="Volvo";
	$cars2="BMW";
	$cars3="Toyota";
	// 然而，如果您想要遍历数组并找出特定的一个呢？如果数组的项不只 3 个而是 300 个呢？
	// 解决办法是创建一个数组！
	// 数组可以在单个变量中存储多个值，并且您可以根据键访问其中的值。
?>

<?php
	$cars=array("Volvo","BMW","Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<?php
	$cars=array("Volvo","BMW","Toyota");
	echo "<br/>";
	echo count($cars);
?>

<?php
	$cars=array("Volvo","BMW","Toyota");
	$arrlength=count($cars);

	for($x=0;$x<$arrlength;$x++)
	{
		echo $cars[$x];
		echo "<br>";
	}
?>

<p>关联数组</p>
<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	echo "Peter is " . $age['Peter'] . " years old.";
?>
<p>遍历关联数组</p>
<?php  
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

	foreach($age as $x=>$x_value)
	{
		echo "Key=" . $x . ", Value=" . $x_value;
		echo "<br>";
	}
?>

<p>sort() - 对数组进行升序排列</p>
<?php  
	$cars=array("Volvo","BMW","Toyota");
	sort($cars);
	print_r($cars);

	$numbers=array(4,6,2,22,11);
	sort($numbers);
	print_r($numbers);
?>
<p>rsort() - 对数组进行降序排列</p>
<?php  
	$cars=array("Volvo","BMW","Toyota");
	rsort($cars);
	print_r($cars);

	$numbers=array(4,6,2,22,11);
	rsort($numbers);
	print_r($numbers);
?>
<p>asort() - 根据数组的值，对数组进行升序排列</p>
<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	asort($age);
	print_r($age);
?>

<p>ksort() - 根据数组的键，对数组进行升序排列</p>
<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	ksort($age);
	print_r($age);
?>
<p>arsort() - 根据数组的值，对数组进行降序排列</p>
<?php  
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	arsort($age);
	print_r($age);
?>

<p>PHP $GLOBALS</p>
<?php  
	$x = 10;
	$y = 20;

	function glo(){
		$result = 0;
		$result = $GLOBALS["x"] + $GLOBALS["y"];
		print($result);
	}
	glo();
?>
<p>PHP $_SERVER</p>
<?php  
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
?>
<p>PHP $_REQUEST</p>
<div>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" accept-charset="utf-8">
		名字：<input type="text" name='fname'>
		<input type="submit" value="提交" />
	</form>
</div>
<?php 
	$name = $_REQUEST['fname']; 
	echo $name; 
?>
<p>PHP $_POST</p>
<div>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type="text" name="fname">
		<input type="submit" value="提交">
	</form>
</div>
<?php  
	$name = $_POST['fname']; 
	echo $name; 
?>
<p>PHP $_GET</p>
<a href="test_get.php?subject=PHP&web=php.cn">Test $GET</a>

<p>while 循环</p>
<?php  
	$i=1;
	while($i<=5)
 	{
 		echo "The number is " . $i . "<br>";
 		$i++;
 	}
?>
<p>do...while 语句</p>

<?php  
	$i=1;
do
 {
 	$i++;
 	echo "The number is " . $i . "<br>";
 }while ($i<=5);
?>

<p>for循环</p>
<?php
	for ($i=1; $i<=5; $i++)
	{
 		echo "The number is " . $i . "<br>";
	}
?>
<p>foreach遍历数组</p>
<?php  
	$x=array("one","two","three");
	foreach ($x as $value)
	{
 		echo $value . "<br>";
	}
?>
<p>PHP函数</p>
<?php  
	function writeName(){
		print("Ken");
	}

	writeName();
?>

<p>PHP 函数 - 添加参数</p>
<?php  
	function setColor($color){
		print($color);
		echo '<a href="#" title="链接" style="color:<?php echo $color;?>">链接</a>';
	}

	setColor('red');
?>

<?php
	function writeName1($fname)
	{
		echo $fname . " Refsnes.<br>";
	}

	echo "My name is ";
	writeName1("Kai Jim");
	echo "My sister's name is ";
	writeName1("Hege");
	echo "My brother's name is ";
	writeName1("Stale");
?>

<?php
	function add($x,$y)
	{
		$total=$x+$y;
		return $total;
	}

	echo "1 + 16 = " . add(1,16);
?>

<p>__LINE__
文件中的当前行号。</p>
<?php
	echo '这是第 “ '  . __LINE__ . ' ” 行';
?>
<p>__FILE__
文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。

自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对路径），而在此之前的版本有时会包含一个相对路径。</p>
<?php  
	echo '该文件位于 “ '  . __FILE__ . ' ” ';
?>
<p>__DIR__
文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。

它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增）</p>
<?php
	echo '该文件位于 “ '  . __DIR__ . ' ” ';
?>

<p>__FUNCTION__
函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。</p>
<?php
	function test2() {
		echo  '函数名为：' . __FUNCTION__ ;
	}
	test2();
?>

<p>__CLASS__
类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。

在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。</p>
<?php
	class test {
		function _print() {
			echo '类名为：'  . __CLASS__ . "<br>";
			echo  '函数名为：' . __FUNCTION__ ;
		}
	}
	$t = new test();
	$t->_print();
?>

<p>__TRAIT__
Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4.0 起，PHP 实现了代码复用的一个方法，称为 traits。

Trait 名包括其被声明的作用区域（例如 Foo\Bar）。

从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。</p>

<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>

<p>__METHOD__
类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。</p>
<?php
	function test3() {
		echo  '函数名为：' . __METHOD__ ;
	}
	test3();
?>
<p>定义命名空间</p>


</body>
</html>
