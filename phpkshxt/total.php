<?php
/**
 * User: alpha
 * Date: 2017/6/29
 * Time: 9:35
 * 考题分数统计
 */
header("Content-type:text/html;charset=utf-8");
require './common/function.php';

$id=getTestId();                //提交考题的序号
$data=getDataById($id,false);   //获取考题内容

//判断题库是否存在
if(!$data){
    require './view/404.html';
    exit;
}

//获取题库信息
list($count,$score)=getDataInfo($data['data']);

//开始阅卷操作
$sum = 0;               //保存总得分
$total=[];              //记录考试结果

foreach ($data['data'] as $type=>$each){
    foreach ($each['data'] as $k=>$v){
        //取出提交的答案
        $answer=isset($_POST[$type][$k])?$_POST[$type][$k] : '';
        //判断答案是否正确
        if($v['answer'] === $answer){
            $total[$type][$k] = true;
            $sum+=$score[$type];
        }else{
            $total[$type][$k]=false;
        }
    }
}
//var_dump($total);
require './view/total.html';
