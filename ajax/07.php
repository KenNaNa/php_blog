<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$news = array(
    array('id'=>1 , 'title'=>'天气放晴'),
    array('id'=>2 , 'title'=>'俄毛被炸'),
    array('id'=>3 , 'title'=>'北约开会'),
);

foreach($news as $n) {
    echo '<li><a href="news.php?id="',$n['id'],'>';
    echo $n['title'];
    echo '</a></li>';
}

?>