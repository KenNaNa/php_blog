<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

// 抽象工厂

// 开闭原则, 应该对类的增加开放,对类的修改闭合.

class MySQL {

}

class Sqlite {

}

class MyPDO {

}

/*
class Factory {
    public static function getDB($type) {
        if($type == 'MySQL') {
            return new MySQL();
        } else if($type == 'Sqlite') {
            return new Sqlite();
        } else if($type == 'MyPDO') {
            return new MyPDO();
        } else {
            throw new Exception("sorry", 1);
            
        }
    } 
}


// 获取DB对象的时
print_r( Factory::getDB('MySQL') );
*/

interface Factory {
    public static function getDB();
}

class MySQLFactory implements Factory {
    public static function getDB() {
        return new MySQL();
    }
}

class SqliteFactory implements Factory {
    public static function getDB() {
        return new Sqlite();
    }
}

class MyPDOFactory implements Factory {
    public static function getDB() {
        return new MyPDO();
    }
}


// 配置文件
$fact = 'MyPDOFactory';
$db = MyPDOFactory::getDB();
print_r($db);





?>