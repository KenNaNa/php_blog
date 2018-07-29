<?php  
	include('check.php');
	$uploaddir = './files/';
	$type = array('jpg','gif','bmp','jpeg','png');
	// echo "ok";
	// echo $_FILES;
	if(!in_array(strtolower(fileext($FILES['file']['name'])),$type)){
		$text = implode(',',$type);
		echo "您只上传以下类型文件 ",$text,"<br>"; 
	}else{
		$filenames = explode('.',$_FILES['file']['name']);
		do{
			$filenames[0] = random(10);
			$name = implode('.',$filenames);
			$uploadfile = $uploaddir.$name;
		}
		while(file_exists($uploadfile));

		if(is_uploaded_file($_FILES['file']['tmp_name'])){
			if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
				echo "<center>您上传的文件完毕 上传图片预览：</center><br/><center><img src='$uploadfile'></center>";
				echo "<br><center><a href='javascript:history.go(-1)'>继续上传</a></center>";
			}else{
				echo "上传失败";
			}
		}
	}
?>