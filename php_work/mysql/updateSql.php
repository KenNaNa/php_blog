<?php  
	include('./sqlConf.php');

	// 将SQL字符串
	$sql = "update mytableinfo set age=20 where name='Ken'";

	// 通过query函数，执行更新数据
	if($conn->query($sql)){
		echo " Update record successfully";
	}else{
		echo "ERROR:".$sql."<br/>".$conn->error;
	}

	$conn->close();
?>