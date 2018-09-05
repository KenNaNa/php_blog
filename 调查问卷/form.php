<?php  
	header("content-type:text/html;charset=utf-8");
	// 引入数据库配置文件
	$cfg = include('./config.php');
	// var_dump($_POST);
	// 封装一个函数用来检测
	// 数据是否为空
	function e(){
		// 如果下面这些有任意一个数据为空
		// 返回true
		if(
			$_POST['sex'] == '' 
			|| $_POST['num'] == '' 
			|| $_POST['username'] == '' 
			|| $_POST['phone'] == '' 
			|| $_POST['English'] == '' 
			|| $_POST['Chinese'] == '' 
			|| $_POST['Cantonese'] == '' 
			|| $_POST['computer'] == '' 
			|| $_POST['height'] == '' 
			|| $_POST['hobby'] == '' 
			|| $_POST['aim'] == '' 
			|| $_POST['place'] == '' 
			|| $_POST['work'] == '' 
			|| $_POST['pay'] == ''){
			return true;
		}
	}
	if(e()){
		// 判断是否有数据提交过来
		// 如果为空给出提示
		echo "<script>
			alert('请将必填项填好在提交');
			location = 'index.html';
		</script>";
		return ;
	}

	// echo $_POST['sex'];
	// echo "<br/>";
	// echo $_POST['number'];
	// echo "<br/>";
	// echo $_POST['username'];
	// echo "<br/>";
	// echo $_POST['phone'];
	// echo "<br/>";
	// echo $_POST['English'];
	// echo "<br/>";
	// echo $_POST['Chinese'];
	// echo "<br/>";
	// echo $_POST['Cantonese'];
	// echo "<br/>";
	// echo $_POST['computer'];
	// echo "<br/>";
	// echo $_POST['height'];
	// echo "<br/>";
	// echo $_POST['hobby'];
	// echo "<br/>";
	// var_dump( $_POST['aim'] );
	// echo "<br/>";
	// echo $_POST['place'];
	// echo "<br/>";
	// echo $_POST['work'];
	// echo "<br/>";
	// echo $_POST['pay'];
	// echo "<br/>";
	// 获取表单提交过来的数据
	// 准备查输入数据库
	$sex = $_POST['sex'];
	$num = $_POST['num'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$english = $_POST['English'];
	$chinese = $_POST['Chinese'];
	$cantonese = $_POST['Cantonese'];
	$computer = $_POST['computer'];
	$height = $_POST['height'];
	$hobby = $_POST['hobby'];
	$aim = $_POST['aim'];
	$place = $_POST['place'];
	$work = $_POST['work'];
	$pay = $_POST['pay'];

	// var_dump($aim);
	// 要处理一下那个$aim的数据因为传过来的是数组
	// 要处理成字符串

	// echo count($aim);
	// count()函数可以计算数组的长度
	$aimStr='';
	for($i = 0; $i < count($aim); $i++){
		$aimStr .= $aim[$i]."/";
	}
	// 截取去掉最后一个字符的剩下字符串
	$aimStr = substr($aimStr,0,-1);
	// echo $aimStr;
	// 截取字符串
	// mb_strlen()获取字符串长度
	// $len = mb_strlen($aimStr);
	// 只执行1次
	// $count = 1;
	// $aimStr = str_replace("/","",$aimStr,$count);
	// 切割字符串
	// 变成数组
	// $aimArr = explode("/",$aimStr);

	// // var_dump($aimArr);
	// $str = '';
	// for($i = 0; $i < count($aimArr)-1; $i++){
	// 	// 将最后一个字符去掉
	// 	$str .= $aimArr[$i].'/';
	// }

	// echo $str;
	// $sqlArr = [];
	// $sqlArr['sex'] = $sex;
	// $sqlArr['number'] = $number;
	// $sqlArr['username'] = $username;
	// $sqlArr['phone'] = $phone;
	// $sqlArr['english'] = $english;
	// $sqlArr['chinese'] = $chinese;
	// $sqlArr['cantonese'] = $cantonese;
	// $sqlArr['computer'] = $computer;
	// $sqlArr['height'] = $height;
	// $sqlArr['hobby'] = $hobby;
	// $sqlArr['aim'] = $aimStr;
	// $sqlArr['place'] = $place;
	// $sqlArr['work'] = $work;
	// $sqlArr['pay'] = $pay;
	$sqlArr = array(
		"sex"=>$sex,
		"num"=>$num,
		"username"=>$username,
		"phone"=>$phone,
		"english"=>$english,
		"chinese"=>$chinese,
		"cantonese"=>$cantonese,
		"computer"=>$computer,
		"height"=>$height,
		"hobby"=>$hobby,
		"aim"=>$aimStr,
		"place"=>$place,
		"work"=>$work,
		"pay"=>$pay
	);

	// 拼接查询语句
	$sql = "insert into "."form";
	$sql.=" (".implode(',',array_keys($sqlArr)).") ";
	$sql.=" values ('".implode("','",array_values($sqlArr))."')";
	// echo $sql;
	
	// 链接数据库
	$conn = new Mysqli($cfg['host'],$cfg['username'],$cfg['pwd'],$cfg['dbname']);
	if($conn->connect_error){
		echo "数据库连接失败了"." 出错的原因是 ".$conn->connect_error;
	}

	// 插入数据
	if ($conn->query($sql) === TRUE) {
		echo "<script>
			alert('数据提交成功，一个人只允许提交一次');
			location = 'index.html'
		</script>";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	// // 关闭连接
	// $conn->close();
?>