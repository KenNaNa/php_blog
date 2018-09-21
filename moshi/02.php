<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

// 简单工厂

class MySQL {

}

class Sqlite {

}


class Factory {
    public static function getDB($type) {
        if($type == 'MySQL') {
            return new MySQL();
        } else if($type == 'Sqlite') {
            return new Sqlite();
        } else {
            throw new Exception("sorry", 1);
            
        }
    } 
}



// 获取DB对象的时
print_r( Factory::getDB('MySQL') );







?>