<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//$user = 'admin';

//echo $user;

setcookie('name' , 'admin');
setcookie('test' , '!!!' , time()+60);
setcookie('user' , 'lisi' , time()+60 , '/');
//print_r($_COOKIE);

/*session_start();
$_SESSION['test'] = 'lisi';*/


?>