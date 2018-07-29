<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<div class="message">
	<form name="myFrom" action="05-message.php" method="post">
		<textarea name="text"></textarea><br/><br/>
		<input type="submit" value="提交" />
	</form>
</div>

<script type="text/javascript">
	function check(){
		if(document.myFrom.text.value==''){
			alert("不能为空");
			return false;
		}else{
			return true;
		}
	}
</script>

<?php  
	if(!empty($_POST['text'])){
		$str = $_POST['text'];
		preg_match_all("/./us", $str, $match);
		print_r($match);
		$num = count($match[0]);
		if($num<=6){
			echo "<script>alert('输入内容小于6')</script>";
		}else{
			echo "<script>alert('发布成功')</script>";
		}
	}
?>
</body>
</html>