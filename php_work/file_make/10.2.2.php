<?php  
	// 手动创建一个文件，内容是 #####HELLO#####
	// 通过文件读取到字符串
	// 然后把HELLO提取出来
	// 以只读的方式打开文件
	$file = fopen('10.2.2.txt','r');
	// 读取内容
	$txt = fread($file,filesize('10.2.2.txt'));

	echo $txt;
	echo "<br/>";

	$hp = mb_strpos($txt,'H',0,'UTF-8');
	echo "大写字符H的位置是：".$hp;
	$hello = mb_substr($txt,$hp,5);
	echo "<br>";
	echo "截取到的字符串为: ".$hello;
?>