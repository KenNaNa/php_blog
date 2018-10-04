<?php  
	// 定义两个变量，交换他们的值
	$a = 20;
	$b = 34;
	// 定义一个临时变量
	$tmp = null;

	// 开始交换变量的值
	$tmp = $a;
	$a = $b;
	$b = $tmp;

	echo $a;
	echo "<br>";
	echo $b;

	// 第二种交换方式
	list($a,$b) = array($b,$a);
	print("<br>");
	print($a);
	print("<br>");
	print($b);

	// 第三种
	//只适用于数字
	$a=3;
	$b=5;
	echo '交换前 $a:'.$a.',$b:'.$b.'<br />';
	$a=$a+$b;
	$b=$a-$b;
	$a=$a-$b;
	echo '交换后$a:'.$a.',$b:'.$b.'<br />';


	// 第三种
	//字符串和数字都适用 使用异或运算
	$a='a';
	$b='b';
	echo '交换前 $a:'.$a.',$b:'.$b.'<br />';
	$a=$a^$b;
	$b=$b^$a;
	$a=$a^$b;
	echo '交换后$a:'.$a.',$b:'.$b.'<br />';

	echo '-----------------------<br/>';


	// //字符串版本 结合使用substr，strlen两个方法实现
	$a="a";
	$b="b";
	echo '交换前 $a:'.$a.',$b:'.$b.'<br />';
	$a.=$b;
	$b=substr($a,0,(strlen($a)-strlen($b)));
	$a=substr($a, strlen($b));
	echo '交换后$a:'.$a.',$b:'.$b.'<br />';

	echo '-----------------------<br/>';

	//字符串版本 使用str_replace方法实现
	$a="a";
	$b="b";
	echo '交换前 $a:'.$a.',$b:'.$b.'<br />';
	$a.=$b;
	$b=str_replace($b, "", $a);
	$a=str_replace($b, "", $a);
	echo '交换后$a:'.$a.',$b:'.$b.'<br />';

	echo '-----------------------<br/>';
?>