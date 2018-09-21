<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/
/*
// 做一饭店
class FanDian {
    public function fan() {
        return '面条';
    }

    public function cai() {
        return '炒菜';
    }

    public function tang() {
        return '蛋花汤';
    }
}


class SouthDian {
    public function fan() {
        return '大米饭';
    }

    public function cai() {
        return '烧菜+奶油';
    }

    public function tang() {
        return '海鲜汤';
    }    
}


class BjDian {
    public function fan() {
        return '大米饭';
    }

    public function cai() {
        return '炒菜';
    }    

    public function tang() {
        return null;
    }
}



$fd = new FanDian();
echo $fd->tang();

*/

class NorthCook {
    public function fan() {
        return '面条';
    }

    public function cai() {
        return '炒菜';
    }

    public function tang() {
        return '蛋花汤';
    }
}

class SouthCook {
    public function fan() {
        return '米饭';
    }

    public function cai() {
        return '烧菜+奶油';
    }

    public function tang() {
        return '海鲜汤';
    }
}

class FD {
    protected $fanCreateor = null;
    protected $caiCreateor = null;
    protected $tangCreateor = null;

    public function __construct($f,$c,$t) {
        $this->fanCreateor = $f;
        $this->caiCreateor = $c;
        $this->tangCreateor = $t;
    }

    public function createFan() {
        return $this->fanCreateor->fan();
    }

    public function createCai() {
        return $this->caiCreateor->cai();
    }

    public function createTang() {
        return $this->tangCreateor->tang();
    }
}


$fd = new FD(new NorthCook() , new NorthCook() , new SouthCook);

echo $fd->createFan() , "<br>";
echo $fd->createTang() , "<br />";



?>