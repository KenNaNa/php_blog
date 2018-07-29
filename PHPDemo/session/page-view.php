<?php  
	session_start();
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
	if(isset($_SESSION['views'])){
		$_SESSION['views']=$_SESSION['views']+1;
	}else{
		$_SESSION['views']=1;
	}
	echo "浏览量：". $_SESSION['views'];
?>	
</body>
</html>