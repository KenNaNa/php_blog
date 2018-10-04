<?php  
	// 获取查询的分数
	$score = $_POST['score'];
	if(empty($score)){
		echo "\$score 不能为空";
		exit;
	}
	// 转换为数字类型
	$score = $score * 1.0;

	// var_dump($score);
	if($score>=400){
		echo "<script>
			alert('恭喜你，考上第一批本科');
			location='index.php';
		</script>";
	}else if($score>=300 && $score<400){
		echo "<script>
			alert('恭喜你，考上第二批本科');
			location='index.php';
		</script>";
	}else if($score<300){
		echo "<script>
			alert('恭喜你，考上专科');
			location='index.php';
		</script>";
	}
?>