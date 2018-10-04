<?php  
	include('./sqlConf.php');

	// 把SQL的指令转换成字符串
	$sql = "insert into mytableinfo(name,age,height) values('Ken',18,170)";

	// 通过query函数，提交插入数据库
	if($conn->query($sql)){
		// 插入成功
		echo "A new record created successfully";
	}else{
		// 插入失败
		echo "Error:".$sql."<br/>".$conn->error;
	}

	// 关闭数据库
	$conn->close();
?>