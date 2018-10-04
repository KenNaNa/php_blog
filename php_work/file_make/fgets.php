<?php  
	// fgets — 从文件指针中读取一行 
	// string fgets  ( resource $handle  [, int $length  ] )
	// 文件指针必须是有效的，必须指向由 fopen()  或 fsockopen()  成功打开的文件(并还未由 fclose()  关闭)。
	$file = fopen('fopen.txt','a+');
	$txt = fgets($file);
	echo $txt;

	// 读取所有行
	// 如果之前读过一行的话
	// 它是会绕过的，不会再去读取已经读取过的那一行
	while($content=fgets($file)){
		echo "<br/>";
		echo $content;
	}
?>