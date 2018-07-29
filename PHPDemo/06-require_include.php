<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>文件的引入</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		.header,.footer{
			width: 100%;
			height: 80px;
			text-align: center;
			line-height: 80px;
			background: yellowgreen;
		}
		.footer{
			position: absolute;
			bottom:0px;
		}
	</style>
</head>
<body>
<?php include './06-header.php'; ?>
<div style="color: red;">
	<center>
		<a href="06-require_include.php?id=05-message" title="">评论</a>
		<a href="06-require_include.php?id=04-select" title="">选择头衔</a>
	</center>
</div>

<?php  
	switch ($_GET['id']) {
		case '05-message':
			# code...
			require('./05-message.php');
			break;
		case "04-select":
			require('./04-select.php');
			break;
		default:
			# code...
			break;
	}
?>
</body>
</html>