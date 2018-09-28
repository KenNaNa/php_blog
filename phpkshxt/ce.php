<?php
/**
 * User: alpha
 * Date: 2017/6/28
 * Time: 16:13
 */
header("Content-type:text/html;charset=utf-8");
require './common/function.php';
$data=require './data/2.php';

//对题库数组进行递归转义
$func = function($data) use(&$func){
    $result = [];
    foreach($data as $k=>$v){
        //如果是数组，则继续递归，如果是字符串，则转义
        $result[$k] = is_array($v) ? $func($v) : (is_string($v) ? toHTML($v) : $v);
        echo '<pre><hr>'.$k.'--';
        var_dump($result[$k]);
    }
    return $result;
};
$res=$func($data);

echo $res['title'];
