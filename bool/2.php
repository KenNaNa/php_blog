<meta charset="utf-8">
<?php  
	// 链接数据
	$con = mysql_connect('localhost','root','root');
	mysql_set_charset('utf-8',$con);
	mysql_select_db('blog',$con);


	// 获取资源
	$sql = "select * from msg";

	$rs = mysql_query($sql);
	if(!$rs){
		echo mysql_errro();
		exit();
	}

	echo mysql_insert_id($con);
	// var_dump($rs);
	// echo "<br/>";
	// var_dump(mysql_fetch_assoc($rs));
	// echo "<br/>";
	// var_dump(mysql_fetch_row($rs));
	// echo "<br/>";
	// var_dump(mysql_fetch_array($rs));

	// while查询所有行
	$arr = array();
	while($row=mysql_fetch_row($rs)){
		$arr[] = $row;
		echo "<pre>";
		print_r($row);
		echo "</pre>";
	}
	echo "<br/>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";


	mysql_close();

?>