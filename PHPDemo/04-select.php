<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<div id="container">
	<select name="myMenu" id="change" onchange="check(this)">
		<option value="1.gif">头像1</option>
		<option value="2.jpg">头像2</option>
	</select>
	<img src="1.gif" id="showTime">
</div>
<script type="text/javascript">
	
	function check(obj){
		var src = obj.value;
		document.getElementById('showTime').src = src;
	}
</script>
</body>
</html>