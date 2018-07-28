<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//echo $user;

//print_r($_COOKIE);

//echo 1;


/*if(!isset($_COOKIE['num'])) {
	$_COOKIE['num'] = 1;
} else {
	$_COOKIE['num'] +=1;
}

echo $_COOKIE['num'];*/

/*if(!isset($_COOKIE['num'])) {
	setcookie('num' , 1);
} else {
	setcookie('num' , $_COOKIE['num']+1);
}

echo $_COOKIE['num'];
*/

if(!isset($_COOKIE['num'])) {
	$num = 1;
	setcookie('num' , $num);
} else {
	$num = $_COOKIE['num'] + 1;
	setcookie('num' , $num);
}

echo $num;




?>