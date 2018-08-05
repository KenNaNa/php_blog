<meta charset="utf-8">
<?php  
	// 链接数据
	$con = mysql_connect('localhost','root','root');
	mysql_query('use blog',$con);
	mysql_query('use names utf8',$con);

	// 插入数据
	$sql = "insert into msg (title,content) values ('$_POST[title]','$_POST[content]')";
	if(mysql_query($sql,$con)){
		echo "插入成功";
	}else{
		echo "插入失败";
	}

	// 获取主键id
	echo mysql_insert_id($con);
	echo "<br/>";
	// 获取影响行数
	echo mysql_affected_rows();
?>