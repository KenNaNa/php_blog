<?php
	session_start();
	$_SESSION['views'] = "设置了session";
	echo $_SESSION['views']."<br/>";
	if(isset($_SESSION['views'])){
		echo '1'.'<br/>';
		unset($_SESSION['views']);
		echo "销毁了";
	}
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
	
</body>
</html>