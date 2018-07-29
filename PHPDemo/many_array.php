<?php
// 二维数组:
$cars = array
(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100)
);
print_r($cars); 
print("<br/>");
// 二维数组
// 可以设置键值
$stu = array
(
	array("name"=>"Ken","age"=>18),
	array("name"=>'Lili',"age"=>19),
	array("name"=>"sea","age"=>18),
);
print_r($stu); 
print("<br/>");
$st = array
(
	array(1=>"ken","age"=>18),
	array(2=>"lili",'age'=>18),
	array(3=>"sea","age"=>18)
);
print_r($st); 
print("<br/>");
?>

<?php 
$sites = array 
( 
    "php"=>array 
    ( 
        "php中文网", 
        "http://www.php.cn" 
    ), 
    "google"=>array 
    ( 
        "Google 搜索", 
        "http://www.google.com" 
    ), 
    "taobao"=>array 
    ( 
        "淘宝", 
        "http://www.taobao.com" 
    ) 
); 
print("<pre>"); // 格式化输出数组 
print_r($sites); 
print("</pre>"); 
?>