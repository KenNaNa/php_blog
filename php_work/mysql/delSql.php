<?php  
	include('./sqlConf.php');

	// 将sql转换成字符串
	$sql = "delete from mytableinfo where name='Ken'";
	if($conn->query($sql)){
		// 删除成功
		echo "Delete record successfully";
	}else{
		// 删除失败
		echo "Error:".$sql."<br/>".$conn->error;
	}
	// 关闭数据库
	$conn->close();
?>