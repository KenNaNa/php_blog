<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//1. 新建空白画布(指定宽高)
$pic = imagecreatetruecolor(201, 300);

//2. 创建颜料
$red = imagecolorallocate($pic, 255, 0, 0);
$blue = imagecolorallocate($pic, 0, 0, 255);



//3. 画图形(椭圆,矩形,直线等),或写字
imageellipse($pic, 100, 150, 200, 300, $red);

//填充背景色
imagefill($pic, 200, 10, $blue);


//4. 输出/保存图形
imagepng($pic , './t1.png');

//5. 销毁画布(关闭画板)
imagedestroy($pic);

?>