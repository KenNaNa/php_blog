<?php  
	include('./sqlConf.php');
	echo "<br/>";
	// 将SQL转换为字符串
	$sql = "select * from mytableinfo where name='Ken'";

	// 通过query函数查询数据库
	$retVal = $conn->query($sql);
	var_dump($retVal);

	// 循环打印
	while($row = mysqli_fetch_object($retVal)){
		echo strval($row->age);
		echo "<br>";
		var_dump($row);
	}

	echo "<br/>";
	var_dump($row);//null

	$conn->close();
?>