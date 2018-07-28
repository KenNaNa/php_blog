<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$big = imagecreatefromjpeg('./kaola.jpg');
$small = imagecreatefrompng('./t1.png');

list($bw , $bh) = getimagesize('./kaola.jpg');
list($w , $h) = getimagesize('./t1.png');

//imagecopymerge(dst_im, src_im, dst_x, dst_y, src_x, src_y, src_w, src_h, pct)
imagecopymerge($big, $small, $bw-$w, $bh-$h, 0, 0, $w, $h, 40);

imagepng($big , 't4.png');

imagedestroy($big);
imagedestroy($small);

?>