<?php 
	header('content-type:text/html;charset=utf-8');
	// 用你的身高，名字分别替换“我是xxx,身高yyy，热爱编程” 中yyy,和 xxx;
	$name = "Ken";
	$height = "170cm";

	$str = "我是xxx，身高yyy，热爱编程";

	$str = str_replace('xxx',$name,$str);
	$str = str_replace('yyy',$height,$str);

	echo $str;

	// 第二种方法
	$name = "Ken";
	$height = "170cm";

	$s1 = array($name,$height);
	$s2 = array("xxx",'yyy');

	$str = "我是xxx，身高yyy，热爱编程";
	$str = str_replace($s2,$s1,$str);
    print("<br>");
    echo $str;

    // 第三种
    // 从$str中截取xxx,yyy
    $name = "Ken";
	$height = "170cm";
	$str = "我是xxx，身高yyy，热爱编程";
	// 下面这种方式只能计算英文字符
	// 因为中文字符占用两个字节
	// 在 UTF-8编码下，一个汉字占3个字节 在gbk中一个汉字占2个字节
	$xp = strpos($str,'x',0);
	$yp = strpos($str,'y',0);

	// 估计要自己写个方法的
	// $xp-3可以说是从‘，’往前面取三个字符就是‘xxx’
	// $xxx = substr($str,$xp,$xp-3);
	// 截取三个字符
	$xxx = substr($str,$xp,3);
	echo "<br/>";
	echo $xxx;
	echo "<br/>";
	// $xp-15可以说是从‘，热爱编程’往前面取三个字符就是‘yyy’
	// $yyy = substr($str,$yp,$yp-15);
	// 截取三个字符
	$yyy = substr($str,$yp,3);
	echo $yyy;

	$s1 = array($name,$height);
	$s2 = array($xxx,$yyy);

	$str = str_replace($s2,$s1,$str);

	print("<br>");
	echo $str;


	// 从上面知道如果要统计包含中文字符的长度的话
	// 要适用到mb_strlen()
	$str = "我是xxx，身高yyy，热爱编程";
	$count = mb_strlen($str,'utf-8');
	print "<br>";
	echo $count;

	// 上面的方式太过复杂了
	// 可以使用mb_strpos()
	$name = "Ken";
	$height = "170cm";
	$str = "我是xxx，身高yyy，热爱编程";
	$xp = mb_strpos($str,'x',0,'utf-8');
	$yp = mb_strpos($str,'y',0,'utf-8');
	echo "<br>";
	echo $xp;
	echo "<br>";
	echo $yp;

	$xxx = mb_substr($str,$xp,3,'UTF-8');
	$yyy = mb_substr($str,$yp,3,'UTF-8');
	echo "<br>";
	echo $xxx;
	echo "<br/>";
	echo $yyy;

	$s1 = array($name,$height);
	$s2 = array($xxx,$yyy);

	$str = str_replace($s2,$s1,$str);

	print("<br>");
	echo $str;

?>