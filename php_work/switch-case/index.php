<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="3.5.2.php">
		<input type="text" name="name" placeholder="请输入季节查询温度值" id="name">
		<input type="submit" name="btn" value="查询" id="btn">
	</form>
	<script>
		
		var oBtn = document.getElementById('btn');
		oBtn.onclick = function(){
			var oName = document.getElementById('name');
			var oVal = oName.value.trim();

			if(oVal===''){
				alert('输入内容不能为空');
				return false;
			}

			return true;
		}

	</script>
</body>
</html>