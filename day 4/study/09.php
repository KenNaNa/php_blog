<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$big = imagecreatefromjpeg('./kaola.jpg');
list($w , $h) = getimagesize('./kaola.jpg');

$small = imagecreatetruecolor($w/2, $h/2);

//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
imagecopyresampled($small, $big, 0, 0, 0, 0, $w/2, $h/2, $w, $h);

imagepng($small , './t6.png');

imagedestroy($big);
imagedestroy($small);


?>