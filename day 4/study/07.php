<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/**
* 生成随机字符串
* @param int $num 生成的随机字符串的个数
* @return str 生成的随机字符串
*/
function randStr($num=6) {
	$str = str_shuffle('abcedfghjkmnpqrstuvwxyzABCEDFGHJKMNPQRSTUVWXYZ23456789');
	return substr($str, 0 , $num);
}


$pic = imagecreatetruecolor(80, 50);

$red = imagecolorallocate($pic, 255, 0, 0);
$blue = imagecolorallocate($pic, 127, 127, 127);

imagefill($pic, 0, 0, $red);

imagestring($pic, 5, 5, 5, randStr(4), $blue);


header('Content-type:image/png');
imagepng($pic);

imagedestroy($pic);

?>