<?php  
	// 首先 我们要判断$_FILES['file']['error']
	// 然后输出各种文件名
	// if($_FILES['file']['error'] > 0){
	// 	echo "文件出错".$_FILES['file']['error'];
	// }else{
		// echo "文件名".$_FILES['file']['name'].'<br/>';
		// echo "文件类型".$_FILES['file']['type']."<br/>";
		// echo "文件暂时存储的位置".$_FILES['file']['tmp_name']."<br/>";
		// echo "文件大小".$_FILES['file']['size'] / 1024 ."kb<br/>";

	// }
	// 先把上面的注释掉
	// 等会可能用得到
	$endExts = array('gif','jpeg','jpg','png');//限制图片的扩展名为gif,jepg,jpg,png
	$temp = explode('.',$_FILES['file']['name']);//通过点.符号对文件名称进行分割
	$extension = end($temp);//获取图片的后缀

	// 接下来判断图片的类型
	if($_FILES['file']['type']==='image/gif' 
		|| $_FILES['file']['type']==="image/jpg" 
		|| $_FILES['file']['type']==="image/jpeg" 
		|| $_FILES['file']['type']==="image/pjpeg" 
		|| $_FILES['file']['type']==="image/x-png" 
		|| $_FILES['file']['type']==="image/png" 
		&& $_FILES['file']['size'] < 204800 
		&& in_array($extension, $endExts)){
		// 判断是否上传错误
		if($_FILES['file']['error']>0){
			echo "文件上传出错".$_FILES['file']['error']."<br/>";
		}else{
			// 否则输出文件信息
			echo "文件名".$_FILES['file']['name'].'<br/>';
			echo "文件类型".$_FILES['file']['type']."<br/>";
			echo "文件暂时存储的位置".$_FILES['file']['tmp_name']."<br/>";
			echo "文件大小".$_FILES['file']['size'] / 1024 ."kb<br/>";
		}

		// 我们要保存上传的图片
		if(file_exists('upload/'.$_FILES['file']['name'])){
			echo $_FILES['file']['name']."已经存在";
		}else{
			move_uploaded_file($_FILES["file"]["tmp_name"],'upload/'. $_FILES["file"]["name"]);
			echo '文件储存在'.'upload/'. $_FILES["file"]["name"];
		}
	}else{
		echo "图片格式错误";
	}
?>