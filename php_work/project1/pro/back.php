<meta charset="utf8">
<?php 
	header('Content-Type:text/html;charset=utf8'); 
	// 验证邮箱
	include('./checkemail.php');
	// 配置文件
	include('./config.php');
	$post = $_POST;
	var_dump($post);

	echo "<br/>";

	// 拼接查询语句
	// 插入的数据表 "insert into "."user"
	// 获取post 字段 " (".implode(',',array_keys($post)).") "
	// 获取post 字段对应的数据 " values ('".implode("','",array_values($post))."')"
	$sql = "insert into "."user";
	$sql.=" (".implode(',',array_keys($post)).") ";
	$sql.=" values ('".implode("','",array_values($post))."')";
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
		echo "您插入的用户名称为:".$post['name'];
		echo "<br/>";
		echo "您插入的邮箱地址为:".$post['email'];

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// // 关闭连接
	// $conn->close();
?>