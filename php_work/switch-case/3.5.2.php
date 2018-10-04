<?php  
	// 获取前台数据
	$name = $_POST['name'];
	// var_dump($name);
	if(empty($name)){
		exit ;
	}
	// var_dump($name);
	switch ($name) {
		case "春天":
			echo "温度5-10‘C 请注意保暖哦";
			break;
		case "夏天":
			echo "温度20-35‘C 天气热请多喝水，防止中暑";
			break;
		case "秋天":
			echo "温度16-25‘C 天气转凉了，多加衣服";
			break;
		case "冬天":
			echo "温度-5-7’C 天气寒冷，多加衣服";
		default:
			echo "....皮了哈...";
			break;
	}
?>