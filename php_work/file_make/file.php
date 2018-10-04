<?php  
	// array file  ( string $filename  [, int $flags  = 0  [, resource $context  ]] )
	// file — 把整个文件读入一个数组中 
	$arr = file('fopen.txt');
	var_dump($arr);
	// 是以换行符 \n 为标准
	// 分隔符
?>