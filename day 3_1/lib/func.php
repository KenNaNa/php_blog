<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
/**
* 成功的提示信息
*/

function succ($res) {
	$result = 'succ';
	require(ROOT . '/view/admin/info.html');
	exit();
}

/**
* 失败返回的报错信息
*/

function error($res) {
	$result = 'fail';
	require(ROOT . '/view/admin/info.html');
	exit();
}

/**
* 获取来访者的真实IP
*
*/

function getRealIp() {
	static $realip = null;
	if($realip !== null) {
		return $realip;
	}

	if(getenv('REMOTE_ADDR')) {
		$realip = getenv('REMOTE_ADDR');
	} else if(getenv('HTTP_CLIENT_IP')) {
		$realip = getenv('HTTP_CLIENT_IP');
	} else if (getenv('HTTP_X_FROWARD_FOR')) {
		$realip = getenv('HTTP_X_FROWARD_FOR');
	}

	return $realip;	
}

/**
* 生成分页代码
* @param int $num 文章总数
* @param int $curr 当前显示的页码数      $curr-2 $curr-1 $curr $curr+1 $curr+2
* @param int $cnt 每页显示的条数
*/

function getPage($num,$curr,$cnt) {
	//最大的页码数
	$max = ceil($num/$cnt);
	//最左侧页码
	$left = max(1 , $curr-2);

	//最右侧页码
	$right = min($left+4 , $max);

	$left = max(1 , $right-4);

/*	(1 [2] 3 4 5) 6 7 8 9 
	1 2 (3 4 [5] 6 7) 8 9
	1 2 3 4 (5 6 7 [8] 9)*/
	$page = array();
	for($i=$left;$i<=$right;$i++) {
		$_GET['page'] = $i;
 		$page[$i] = http_build_query($_GET);
	}

	return $page;
}

//print_r(getPage(100,5,10));

/**
* 生成随机字符串
* @param int $num 生成的随机字符串的个数
* @return str 生成的随机字符串
*/
function randStr($num=6) {
	$str = str_shuffle('abcedfghjkmnpqrstuvwxyzABCEDFGHJKMNPQRSTUVWXYZ23456789');
	return substr($str, 0 , $num);
}

//echo randStr();

/**
* 创建目录 ROOT.'/upload/2015/01/25/qwefas.jpg'
* 
*/
function createDir() {
	$path = '/upload/'.date('Y/m/d');
	$fpath = ROOT . $path;
	if(is_dir($fpath) || mkdir($fpath , 0777 , true)) {
		return $path;
	} else {
		return false;
	}
}

/**
* 获取文件后缀
* @param str $filename 文件名
* @return str 文件的后缀名,且带点.
*/
function getExt($filename) {
	return strrchr($filename, '.');
}



?>