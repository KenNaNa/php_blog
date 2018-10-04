<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="3.5.1.php" method="post">
		<input type="text" name="score" placeholder="请输入分数" id="score" />
		<input type="submit" name="btn" value="查询" id="btn">
	</form>
	<script>
		
		var oBtn = document.getElementById('btn');
		// 检测输入的是否是数字类型
		oBtn.onclick = function(){
			// 获取元素
			var oScore = document.getElementById('score');
			// 获取input输入的值
			// 去点两边的空格
			var oVal = oScore.value.trim();
			if(oVal===''){
				alert('不能为空');
				return false;
			}
			// 转换为数字类型
			oVal = oVal * 1.0;

			if(isNaN(oVal)){
				alert('请输入正确的格式：例如 200');
				// 阻止提交表单
				return false;
			}
			return true;
		}
		
	</script>
</body>
</html>