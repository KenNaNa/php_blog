<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		div,html,body{
			margin: 0;
			padding: 0;
		}
		div{
			width: 100%;
			height: 50px;
			text-align: center;
		}
		.header{
			width: 100%;
			height: 50px;
			line-height: 50px;
			background-color: yellow;
			color: red;
		}
	</style>
</head>
<body>
<?php  
	error_reporting(E_ALL & ~E_NOTICE);
	include("06-header.php");
?>	
<div>
	<a href="include.php?id=05-message">评论</a>
	<a href="include.php?id=04-select">选项</a>
</div>
<?php  
	$id = $_GET['id'];
	switch ($id) {
		case '05-message':
			# code...
			require('./05-message.php');
			break;
		case '04-select':
			# code...
			require('./04-select.php');
			break;
		default:
			# code...
			break;
	}
?>
</body>
</html>