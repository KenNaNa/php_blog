<?php 
    header('content-type:text/html;charset=utf-8');
    $str = 'abcdef';
    echo strlen($str); // 6
    echo "<br/>";
    $str = ' ab cd ';
    echo mb_strlen($str); // 7
    echo "<br/>";
    //strlen 是计算字符串"字节"长度 
    //mb_strlen,是根据编码,计算字符串的"字符"个数. 

    $str='中华人民共和国';
    echo "字节长度是".strlen($str);//在 UTF-8编码下，一个汉字占3个字节 在gbk中一个汉字占2个字节
    echo "<br/>";
    echo "字符长度是".mb_strlen($str,'utf-8');
 ?>

 <?php 
    $pwd="userpwd";
    $pwd2="Userpwd";
    //区分大小写
    if (strcmp($pwd, $pwd2) !=0) {
        echo "password do not match";
    } else{
        echo "password match";
    }

    $email1="www.baidu.com";
    $email2="WWW.BAIDU.COM";
    //不区分大小写
    if (!strcasecmp($email1, $email2)) {
        echo "ok",'<br>';
    }
    //求两个字符串相同的部分
    $password="1233345";
    if (strspn($password,"1234567890")==strlen($password)) {
        echo "the password connot consist solely of numbers";
    }
    //
    $password="a12345";
    if (strcspn($password, "1234567890")==0) {
        echo "the password connot consist solely of numbers";
    }
    
 ?>


 <?php 
header('content-type:text/html;charset=utf-8');
    $str = "Hello Friend";

    $arr1 = str_split($str);
    print_r($arr1);

    $arr2 = str_split($str, 3);
    print_r($arr2);

    $str = 'abc,中国,美国,日本'; 
    // explode,是根据指定的分割符,把字符串拆成数组. 
    $arr = explode(',',$str); 
    print_r($arr); 
    // implode,是根据指定的连接符,把数组再拼接成字符串 
    $arr = explode(',',$str); 
    echo implode('~',$arr),'<br />'; 
    // 你可以只传一个数组做参数,不指定连接符, 
    // 这样,将把数组单元直接拼接起来 
    echo implode($arr);

 ?>

 <?php 

    $str = "hello ', world"; 
    echo $str,'<br />';
    echo $str= addslashes($str),'<br />';
    echo stripslashes($str),'<br />';
    $str = '<ab>'; 
    echo $str,'<br />'; 
    echo htmlspecialchars($str); 
    echo "</br>";
    $str="Email <a href='admin@qq.com'>example@qq.com</a>";
    echo strip_tags($str);

 ?>

 <?php 
    $str = '12345678'; 
    echo chunk_split($str,3,',');
    echo "<br>";
    $text   = "\t\tThese are a few words :) ...  ";
    echo trim($text);
    echo "<br>";
    echo ltrim($text,'\t'),'<br>';
    echo rtrim($text,'\r'),'<br>';
    echo str_pad('apple', 6)."is good.";
 ?>

 <?php 
    $data = "Two Ts and one F.";

    foreach (count_chars($data, 1) as $i => $val) {
       echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    }

    echo "<hr>";
    $str = "Hello fri3nd, you're looking good today!";

    print_r(str_word_count($str, 1));

 ?>


 <?php 
    $substr = "index.html";
    $log = <<< logfile
    192.168.1.11:/www/htdocs/index.html:[2016/08/10:21:58:27]
    192.168.1.11:/www/htdocs/index.html:[2016/08/18:01:51:37]
    192.168.1.11:/www/htdocs/index.html:[2016/08/20:11:48:27]
logfile;

    $pos =strpos($log, $substr);
    $pos2=strpos($log,"\n",$pos);
    $pos=$pos+strlen($substr)+1;
    $timestamp=substr($log,$pos,$pos2-$pos);
    echo "The file $substr was first accessed on:$timestamp";
    echo "<br>";
    $author="lester@example.com";
    $author=str_replace("@", "at", $author);
    echo "connect the author of this article at $author";
    echo "<br>";
    echo ltrim(strstr($author,"@"), "@");

 ?>

 <?php 
    $url="http://WWWW.BAIDU.COM";
    echo strtolower($url),'<br>';
    $str="hello world";
    echo strtoupper($str),'<br>';
    $str="php is the most popular language ";
    echo ucfirst($str),'<br>';
    echo ucwords($str);
 ?>