<?php  
	// string file_get_contents  ( string $filename  [, bool $use_include_path  = false  [, resource $context  [, int $offset  = -1  [, int $maxlen  ]]]] )
	// 将整个文件读入一个字符串 
	$content = file_get_contents('fopen.txt');
	// 字符串
	echo $content;
?>