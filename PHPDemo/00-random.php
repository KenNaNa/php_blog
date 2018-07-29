<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php  
	$str = "0123456789abcdefghijklmnopqrstuvwxyz";
	$n = 8;
	$len = strlen($str)-1;
	$s = "";
	for($i=0;$i<$n;$i++){
		$s .= $str[rand(0,$len)]; 
	}
	echo $s . "<br/>";
?>
</body>
</html>