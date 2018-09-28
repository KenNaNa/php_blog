<?php
/**
 * User: alpha
 * Date: 2017/6/27
 * Time: 7:56
 * 在线考试系统首页
 */
header("Content-type:text/html;charset=utf-8");
/**
//统计题库目录下的“.php”文件个数
$count = count(glob('./data/*.php'));

//echo $count;
//var_dump(glob('./data/*.php'));

//引入题库文件
$data=require './data/1.php';
**/
include './common/function.php';
//统计题库目录下的“.php”文件个数,此处要求题库文件名必须是连续的数字
$count = count(glob('./data/*.php'));

//读取题库
$info=[];                   //保存题库信息
for($i=1;$i<=$count;$i++){
    //获取题库
    $data=require "./data/$i.php";
    $info[$i]=[
        'title'=>$data['title'],
        'time'=>round($data['timeout']/60),
        'score'=>getDataTotal($data['data'])
    ];
}
// var_dump($data);
// var_dump($info);
unset($data);
/*
$str1="<h1>111111111111111111</h1><b>22222222222222222222</b>";
$str2=htmlspecialchars($str1);
echo $str1;
echo "<hr>";
echo htmlspecialchars_decode($str2);
*/
//引入HTML模板
include './view/index.php';
