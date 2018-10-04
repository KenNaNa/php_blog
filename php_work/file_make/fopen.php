<?php  
	// 创建文件
	// "w"	 写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
	// "w+" 读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
	// "a"	 写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
	// "a+" 读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
	// "x"	 创建并以写入方式打开，将文件指针指向文件头。如果文件已存在，则 fopen() 调用失败并返回 FALSE
	// "x+" 创建并以读写方式打开，将文件指针指向文件头。如果文件已存在，则 fopen() 调用失败并返回 FALSE
	// "r+" 读写方式打开，将文件指针指向文件头。
	// "r"	 只读方式打开，将文件指针指向文件头。
	/**
	 * 一般操作文件的方法分四个步骤：1.打开文件 2.读入文件内容 3.写入内容到文件 4.关闭文件
	 */
	

	// 判断一个文件是否存在用 file_exists()
	$filename = 'fopen.txt';
	if(file_exists($filename)){
		echo "<br/>";
		echo "该文件已经存在";
		echo "<br/>";
		// 读取文件内容
		// 取得文件大小 filesize(文件名)
		$file = fopen('fopen.txt','a+');
		echo  $filename  .  ': '  .  filesize ( $filename ) .  ' bytes' ;
		echo "<br/>";
		$content = fread($file,filesize($filename));
		echo $content;
	}else{
		// 创建文件
		$file = fopen('fopen.txt','a+');
		var_dump($file);
	}

	// 上面这种情况是保证只执行一次
	
?>