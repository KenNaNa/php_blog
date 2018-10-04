<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>
<h1>第一题:交换变量值</h1>
<?php
$a=265;
$b=34;
print 'a=';
print $a;
echo '<br />';
print 'b=';
print $b;
$temp=$a^$b;
echo '<br />';
echo '交换之后：<br />';
print 'now $a=';
print $a^$temp;
echo '<br />';
print 'now $b=';
print $b^$temp;
echo '<br />';
echo '<br />';
?>
<h1>第二题：从1加到10</h1>>
<?php
$sum=0;
for($i=1;$i<=10;$i++)
{

    $sum+=$i;
    //echo $sum;
    if($i==10)
    {
        echo "整数1到10的和为：".$sum."<br />"."<br />";
    }
}
?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: churen
 * Date: 2018/8/21
 * Time: 20:00
 */