<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="email.php" method="get">
	<input type="email" name="email"/>
	<input type="hidden" name="hidden"/>
	<input type="submit" value="提交">
</form>	
<?php
	if(!filter_has_var(INPUT_GET, "email")){
		echo("没有 email 参数");
	}else{
		if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)){
			echo "不是一个合法的 E-Mail";
		}else{
			echo "是一个合法的 E-Mail";
		}
	}
?>
</body>
</html>