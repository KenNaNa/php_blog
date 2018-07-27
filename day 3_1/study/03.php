<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//print_r($_FILES);
//将临时文件 移动到其他的位置

//生成随机文件名
$fname = rand(10000,99999);

//获取文件后缀
$ext = strrchr($_FILES['pic']['name'], '.');//.jpg

//连接创建目录
$path = './'.date('Y/m/d');
if(!is_dir($path)) {
	mkdir($path , 0777 , true);
}

echo move_uploaded_file($_FILES['pic']['tmp_name'], $path . '/' . $fname . $ext)?'ok':'fail';

//2015/01/25/hua.jpg


?>