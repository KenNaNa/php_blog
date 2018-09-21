<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

/*
// 讲坛,举报
....
....
[举报] : 粗口 黄赌毒 反政府
       : 版主 警察   国安 
*/

class Banzhu {
    protected $power = 1;
    public function proc() {
        echo '删帖';
    }
}

class Police {
    protected $power = 2;
    public function proc() {
        echo '抓人';
    }
}

class Guoan{
    protected $power = 3;
    public function proc() {
        echo '灭口';
    }
}


$jb = $_POST['jubao']  = 2;

if($jb == 1) {
    $admin = new Banzhu();
} else if($jb = 2) {
    $admin = new Police();
} else if($jb = 3) {
    $admin = new Guoan();
}

$admin->proc();


?>