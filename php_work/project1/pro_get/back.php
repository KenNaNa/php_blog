<?php  
	include('./config.php');
	if(!isset($_GET['name']) && !isset($_GET['email'])){
		echo "<script>
			location='./front.html';
		</script>";
		exit();
	}

	var_dump($_GET);
	$get = $_GET;
	echo "<br/>";


	// 拼接查询语句
	// 插入的数据表 "insert into "."user"
	// 获取post 字段 " (".implode(',',array_keys($post)).") "
	// 获取post 字段对应的数据 " values ('".implode("','",array_values($post))."')"
	$sql = "insert into "."user";
	$sql.=" (".implode(',',array_keys($get)).") ";
	$sql.=" values ('".implode("','",array_values($get))."')";
	echo $sql;

	echo "<br/>";

	// 链接数据库
	$conn = new Mysqli($sqlConfigInfo['host'],$sqlConfigInfo['user'],$sqlConfigInfo['pwd'],$sqlConfigInfo['dbname']);
	$conn->set_charset('utf8');
	if($conn->connect_error){
		echo "数据库连接失败了"." 出错的原因是 ".$conn->connect_error;
	}

	// 插入数据
	if ($conn->query($sql) === TRUE) {
		echo "您插入的用户名称为:".$get['name'];
		echo "<br/>";
		echo "您插入的邮箱地址为:".$get['email'];
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	// // 关闭连接
	// $conn->close();
?>