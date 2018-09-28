<?php
/**
 * User: alpha
 * Date: 2017/6/28
 * Time: 7:46
 * 在线答题考试功能处理
 */
/**
 * url: /test.php?id=?
 * id：题库文件名
 * 要对题库文件名进行判断，排除一些非法输入
 */
header("Content-type:text/html;charset=utf-8");
require './common/function.php';

//题库id
$id = getTestId($_GET['id']);
//题库数据
$data=getDataById($id);

if(!$data){
    require './view/404.html';
    exit;
}

list($count,$score)=getDataInfo($data['data']);


//引入答题页模板
require './view/test.html';