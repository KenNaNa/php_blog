<?php  
	if(isset($_POST)){
		if($_POST['text']=="admin" && $_POST['pswd']==123456){
			echo "登录成功了";
		}else{
			echo "登录失败了";
		}
	}
	
 ?>


<!-- // // parse_url适用于解析当前页面的链接
// $urlar = parse_url($_SERVER['HTTP_REFERER']);
// print("<pre>");
// print($urlar);
// print($_SERVER['HTTP_REFERER']);
// if($urlar['host']!="localhost"){
// 	echo "页面失效<br/>";
// 	echo "<script>alert('链接失效');location='02-php_server.php'</script><br/>";
// 	exit;
// }

// echo "可以正常访问页面<br/>";
// print('</pre>'); -->