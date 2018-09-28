<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>首页 - 在线考试系统</title>
		<link rel="stylesheet" href="../../phpkshxt/view/css/style.css">
	</head>
	<body>
		<div class="top">
			<div class="top-title">在线考试系统</div>
		</div>
		<div class="main">
			<div class="main-wrap">
				<div class="main-title">请选择题库</div>
				<?php foreach($info as $k=>$v){?>
				<div class="main-each">
					<div class="main-each-L"><?php echo $v['title'];?></div>
					<div class="main-each-R">
						<span>时间：<?php echo $v['time'];?>分钟 总分：<?php echo $v['score'];?>分</span><a href="test.php?id=<?php echo $k;?>">开始考试</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="footer">
			PHP在线考试系统　本项目仅供学习使用
		</div>
	</body>
</html>