<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//连接数据库
$conn = mysql_connect('localhost' , 'root' , '');
mysql_query('set names utf8' , $conn);
mysql_query('use 1224php');

//查询所有的内容
$sql = "select * from lovewall";
$rs = mysql_query($sql);

$data = array();
while($row = mysql_fetch_assoc($rs)) {
	$data[] = $row;
}

if(!empty($_POST)) {
	//insert 插入内容
	//获取随机位置
	$rtop = mt_rand(0 , 419);
	$rleft = mt_rand(0 , 690);

	$arr = array('o1.gif' , 'o2.gif' , 'o3.gif');
	$pic = $arr[array_rand($arr)];

	$sql = "insert into lovewall (addressee,sender,content,rtop,rleft,pic) values
	 ('$_POST[addressee]','$_POST[sender]','$_POST[content]' , $rtop , $rleft , '$pic')";

	//echo $sql;exit();
	if(!mysql_query($sql)) {
		echo mysql_error();
		exit();
	} else {
		//echo 'ok';
		//跳转到上个页面
		$ref = $_SERVER['HTTP_REFERER'];
		header("Location: $ref");
	}
}

//print_r($data);
require('./lw.html');


?>