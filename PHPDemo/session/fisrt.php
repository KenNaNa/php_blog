<?php 
	session_start(); 
	// 存储 session 数据
	$_SESSION['views']=1;
?>
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
	// 检索 session 数据
	echo "浏览量：". $_SESSION['views'];
?>	
</body>
</html>