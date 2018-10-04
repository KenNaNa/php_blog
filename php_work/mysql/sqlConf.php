<?php  
	// 服务器名称
	$server_name = "localhost";
	$user_name = "root";
	$password = "root";
	$dbname = "MyDataBase";

	// 创建数据库链接
	$conn = new mysqli($server_name,$user_name,$password,$dbname);

	// 检查连接是否成功
	if($conn->connect_error){
		die("Connection failed:".$conn->connect_error);
	}

	echo "Connected successfully";
?>