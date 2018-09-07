<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$poem = array();
$poem[] = array('title'=>'渡汉江',
'author'=>'李频','content'=>
'岭外音书绝， 经冬复立春。
近乡情更怯， 不敢问来人');
$poem[] = array('title'=>'寻隐者不遇',
'author'=>'贾岛','content'=>
'松下问童子， 言师采药去。
只在此山中， 云深不知处。 ');
$poem[] = array('title'=>'登乐游原',
'author'=>'李商隐','content'=>
'向晚意不适， 驱车登古原。
夕阳无限好， 只是近黄昏。 ');
$poem[] = array('title'=>'何满子',
'author'=>'张祜','content'=>
'故国三千里， 深宫二十年。
一声何满子， 双泪落君前。 ');
$poem[] = array('title'=>'江雪',
'author'=>'柳宗元','content'=>
'千山鸟飞绝， 万径人踪灭。
孤舟蓑笠翁， 独钓寒江雪。 ');

$i = mt_rand(0,4);

echo json_encode($poem[$i]);

?>