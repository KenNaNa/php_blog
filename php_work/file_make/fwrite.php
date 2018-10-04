<?php  
	// 10.1.1.3 写入内容到文件
	// 函数：fwrite(文件句柄, 写入内容)  返回写入的字符数，出现错误时则返回 false。
	$file = fopen('fopen.txt','a+');
	$txt = "Bill Gates\n";
	fwrite($file,$txt);
	// fclose()
	fclose($file);

	echo "已经写入了";
?>