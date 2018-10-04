<?php
//以读写的方式打开文件，如果文件不存在则创建
$file = fopen("testFile.txt", 'w+');
//如果打开失败则终止
if($file == false) 
{
	exit("open file fail...");
}
//要写入文件的信息
$txtWrite = "I am a coder!"; 
//写入信息到文件
if(fwrite($file, $txtWrite)==false) 
{
	exit("write file fail...");
}
//测试了如果写完不关闭，不能读取
fclose($file);
//以读的方式打开
$file = fopen("testFile.txt", "r");
$txtRead = fread($file, filesize("testfile.txt"));
//如果读取失败则终止
if($txtRead==false)
{
	exit("read file fail...");
}
echo "Read Success: ".$txtRead;
?>