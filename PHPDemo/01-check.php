<?php  
	$action = $_GET["action"];
	switch ($action) {
		case 'add':
			echo "<script>alert('现在执行增加功能')</script>";
			print("已经增加");
			break;

		case 'del':
			echo "<script>alert('现在执行删除功能')</script>";
			print("已经删除");
			break;

		case 'search':
			echo "<script>alert('现在执行查找功能')</script>";
			print("现在查找");
			break;
		case 'update':

			echo "<script>alert('现在执行更新功能')</script>";
			print("现在更新");
			break;
		default:
			# code...
			break;
	}
?>