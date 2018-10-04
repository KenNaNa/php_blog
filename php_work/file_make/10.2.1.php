<?php  
	// 通过URL访问的方式，把URL参数写进文件中
	
	$get = $_GET;
	if(empty($get)){
		echo "请以URL参数链接访问(例如：http://localhost/php_work/file_make/10.2.1.php?name=Ken&sex=man)";
		exit();
	}
	var_dump($get);
	// 获取键值数组
	var_dump(array_keys($get));
	var_dump(array_values($get));

	// 打开文件
	$file = fopen('10.2.1.txt','a+');
	$content = '';
	foreach ($get as $key => $value) {
		$content.=$key."=>".$value."\n";
	}
	// 写数据
	fwrite($file,$content);

	// 关闭文件
	fclose($file);
?>