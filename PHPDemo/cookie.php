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
	// 第一个为键
	// 第二个为值
	// 第三个为期限
	setcookie('user','Ken',time()+3600)
?>	
<!-- <script type="text/javascript">
	var cookie = document.cookie;
	var cookieArr = cookie.split(';');
	console.log(cookieArr);
	document.write(cookieArr[0]);
</script> -->

<?php  
	// 设置 cookie 过期时间为过去 1 小时
	setcookie("user", "", time()-3600);
?>
<!-- 再来获取 -->
<?php  
	if(isset($_COOKIE['user'])){
		echo 'user='.$cookie;
	}else{
		echo "cookie已被删除";
	}
	
?> 
</body>
</html>