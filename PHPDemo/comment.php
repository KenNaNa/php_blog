<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		textarea{
			resize:none;
			width: 400px;
			color: #109D59;
			font-size: 20px;
		}
		h1{
			color: #109D59;
			text-shadow:0px 0px 5px #109D59;
		}
		li{
			list-style: none;
			width: 400px;
			height: 30px;
			color: #109D59;
			text-shadow:0px 0px 5px #109D59;
		}
	</style>
</head>
<body>
<div id="div">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" accept-charset="utf-8">
		<p><h1>留言本</h1></p>
		<p><textarea name="text" cols="30" rows="10"></textarea></p>
		<p><input type="submit" value="提交"></p>
	</form>
</div>
<?php  

	if(empty($_POST))return;
	else{
		$text = $_POST['text'];
		$array = array();
		array_push($array,$text);
		
		echo "<ul>";
		for($i=0;$i<count($array);$i++){
			echo "<li>".$array[$i]."</li>";
		}
		echo "</ul>";
	}
?>
</body>
</html>