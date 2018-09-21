<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

class TianQi {
    public function get(){
        // 操作API
        // 解析XML
        // 一系列的复杂操作,得到
        return ['temp'=>25.3 , 'wind'=>9.2];
    }
}


// 到了美国,用华氏度
class Us {
    public function get() {
        $tq = new TianQi();
        $row = $tq->get();
        $row['temp'] = $this->trans( $row['temp'] );
        
        return $row;
    }

    public function trans($t) {
        return $t*9/5+32;
    }
}


$tq = new TianQi();
$us = new Us();

print_r($tq->get());
print_r($us->get());

?>