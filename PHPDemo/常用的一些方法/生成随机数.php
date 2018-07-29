<?php  
	function GetRandStr($length){
		$str='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		$len=strlen($str)-1;

		$randstr='';

		for($i=0;$i<$length;$i++){

			$num=mt_rand(0,$len);

			$randstr .= $str[$num];
		}

		return $randstr;
	}

	$number=GetRandStr(6);

	echo $number;

?>

<?php  

	
function make_password( $length = 8 )
{
    // 密码字符集，可任意添加你需要的字符
    $chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 
    'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's', 
    't', 'u', 'v', 'w', 'x', 'y','z', 'A', 'B', 'C', 'D', 
    'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L','M', 'N', 'O', 
    'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y','Z', 
    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '!', 
    '@','#', '$', '%', '^', '&', '*', '(', ')', '-', '_', 
    '[', ']', '{', '}', '<', '>', '~', '`', '+', '=', ',', 
    '.', ';', ':', '/', '?', '|');
    // 在 $chars 中随机取 $length 个数组元素键名
    $keys = array_rand($chars, $length); 
    $password = '';
    for($i = 0; $i < $length; $i++)
    {
        // 将 $length 个数组元素连接成字符串
        $password .= $chars[$keys[$i]];
    }
    return $password;
}
?>


<?php  
	function get_password( $length = 8 ) 
	{
    	$str = substr(md5(time()), 0, $length);//md5加密，time()当前时间戳
    	return $str;
	}
?>


<?php  
	function getrandstr(){
		$str='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
		$randStr = str_shuffle($str);//打乱字符串
		$rands= substr($randStr,0,6);//substr(string,start,length);返回字符串的一部分
		return $rands;
	}
?>

<?php  
	$code = rand(10000, 99999);

?>


<!-- float lcg_value ( void )
lcg_value() 返回范围为 (0, 1) 的一个伪随机数。本函数组合了周期为 2^31 - 85 和 2^31 - 249 的两个同余发生器。本函数的周期等于这两个素数的乘积。 -->
<?php  
for($i=0; $i<5; $i++){
    echo lcg_value().PHP_EOL;
}

?>


<?php
/**
 * 生成0~1随机小数
 * @param  Int   $min
 * @param  Int   $max
 * @return Float
 */
	function randFloat($min=0, $max=1){
	    return $min + mt_rand()/mt_getrandmax() * ($max-$min);
	}
	 
	// 获取microtime
	function get_microtime(){
	    list($usec, $sec) = explode(' ', microtime());
	    return (float)$usec + (float)$sec;
	}
	 
	// 记录开始时间
	$starttime = get_microtime();
	 
	// 执行10万次获取随机小数
	for($i=0; $i<100000; $i++){
	    randFloat();
	}
	 
	// 记录结束时间
	$endtime = get_microtime();
	 
	// 输出运行时间
	printf("run time %f ms\r\n", ($endtime-$starttime)*1000);
?>


<?php
/**
 * 生成0~1随机小数
 * @param  Int   $min
 * @param  Int   $max
 * @return Float
 */
function randFloat($min=0, $max=1){
    return $min + mt_rand()/mt_getrandmax() * ($max-$min);
}
 
 
header('content-type: image/png');
$im = imagecreatetruecolor(512, 512);
$color1 = imagecolorallocate($im, 255, 255, 255);
$color2 = imagecolorallocate($im, 0, 0, 0);
for($y=0; $y<512; $y++){
    for($x=0; $x<512; $x++){
        $rand = randFloat();
        if(round($rand,2)>=0.5){
            imagesetpixel($im, $x, $y, $color1);
        }else{
            imagesetpixel($im, $x, $y, $color2);
        }
    }
}
imagepng($im);
imagedestroy($im);
?>


<?php
header('content-type: image/png');
$im = imagecreatetruecolor(512, 512);
$color1 = imagecolorallocate($im, 255, 255, 255);
$color2 = imagecolorallocate($im, 0, 0, 0);
for($y=0; $y<512; $y++){
    for($x=0; $x<512; $x++){
        $rand = lcg_value();
        if(round($rand,2)>=0.5){
            imagesetpixel($im, $x, $y, $color1);
        }else{
            imagesetpixel($im, $x, $y, $color2);
        }
    }
}
imagepng($im);
imagedestroy($im);
?>

