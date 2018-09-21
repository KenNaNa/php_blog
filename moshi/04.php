<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

// 单例模式

/*
class Single {
    protected $rnd;

    public function __construct() {
        $this->rnd = mt_rand(10000,99999);
    }
}

// 外界可能自由的new N次,得到N个对象
$s1 = new Single();
$s2 = new Single();

print_r($s1);
print_r($s2);
*/

/*
// 关键在于 防止住外界来new 
class Single {
    protected $rnd;

    protected function __construct() {
        $this->rnd = mt_rand(10000,99999);
    }

    public static function getIns() {
        return new self();
    }
}
*/



// 判断,保证只有一个对象
class Single {
    protected $rnd;
    protected static $ins = null;

    protected function __construct() {
        $this->rnd = mt_rand(10000,99999);
    }

    public static function getIns() {
        if(self::$ins === null) {
            self::$ins = new self();
        }

        return self::$ins;
    }
}




$s1 = Single::getIns();
$s2 = Single::getIns();

print_r($s1);
print_r($s2);

$s3 = clone $s2;
print_r($s3);

var_dump($s3 === $s2);
var_dump($s1 === $s2);

?>