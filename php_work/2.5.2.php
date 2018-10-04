<?php  
	header('content-type:text/html;charset=utf-8');
	// 将下面#之间的字符串截取出来
	$str = "#####################Hello############";
	$hp = mb_strpos($str,'H',0,'UTF-8');
	echo "大写字符H的位置是：".$hp;
	$hello = mb_substr($str,$hp,5);
	echo "<br>";
	echo "截取到的字符串为: ".$hello;
?>