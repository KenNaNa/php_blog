<?php  
	// readfile()函数用于读入一个文件，并将其写入到输出缓冲中，如果出现错误则返回false
	// int readfile  ( string $filename  [, bool $use_include_path  = false  [, resource $context  ]] )
	$txt = readfile('fopen.txt');
	echo $txt;
	// 返回的是字符串的个数
?>