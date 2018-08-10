# php_blog
php博客
# smarty 模板引擎

https://www.yiibai.com/smarty/

# 如何获取用户的 ip

```
第一种
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
```

```
//方法2：
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
echo $user_IP;
```

```
//方法3：
function getRealIp()
{
  $ip=false;
  if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
  }
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
    if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
    for ($i = 0; $i < count($ips); $i++) {
      if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
        $ip = $ips[$i];
        break;
      }
    }
  }
  return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
echo getRealIp();
```
```
//方法4：
if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"])
{
  $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
}
elseif ($HTTP_SERVER_VARS["HTTP_CLIENT_IP"])
{
  $ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
}
elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"])
{
  $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
}
elseif (getenv("HTTP_X_FORWARDED_FOR"))
{
  $ip = getenv("HTTP_X_FORWARDED_FOR");
}
elseif (getenv("HTTP_CLIENT_IP"))
{
  $ip = getenv("HTTP_CLIENT_IP");
}
elseif (getenv("REMOTE_ADDR"))
{
  $ip = getenv("REMOTE_ADDR");
}
else
{
  $ip = "Unknown";
}
echo $ip ;
```
```
//方法5：
if(getenv('HTTP_CLIENT_IP')) {
  $onlineip = getenv('HTTP_CLIENT_IP');
} elseif(getenv('HTTP_X_FORWARDED_FOR')) {
  $onlineip = getenv('HTTP_X_FORWARDED_FOR');
} elseif(getenv('REMOTE_ADDR')) {
  $onlineip = getenv('REMOTE_ADDR');
} else {
  $onlineip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
}
echo $onlineip;
```
# 前后台怎样进行数据交互
```
修改数据要将你的列表变成表单才可进行编辑，首先获取表单中的数据，通过ajax传送数据到php进行修改，在页面中显示的数据其实是从数据库中获取的，数据库变了，获取的内容自然就变了，这就是动态页面，因此，还需要一个php从后台获取页面

1.从数据库中获取内容，如果html页面直接获取的话需要引擎编译，这里是直接创建的表格，js代码

//通过ajax取数据
        ajax({
            url:"select.php",
            dataType:"json",
            success:function(e){
                var str="";
                for(var i=0;i<e.length;i++){
                    str+="<tr id="+e[i].id +">";
                        str+="<td class='name'>"+e[i].name+"</td>";
                        str+="<td class='age'>"+e[i].age+"</td>";
                        str+="<td class='sex'>"+e[i].sex+"</td>";
                        str+="<td class='aa'><span class='del'>删除</span></td>";
                    str+="</tr>";
                    console.log(e)
                }
                tbody.innerHTML=str;
            }
        })
select.php

<?php
    $db=new mysqli("localhost","root","","student"); //使用自己的数据库
    $db->query("set names utf8"); //固定，设置编码形式
    $sql="select * from xinxi";   //查找表
    $result=$db->query($sql);//组合语句
    while($row=$result->fetch_assoc()){   //循环获取表的信息
//        var_dump("<pre>");
        $array[]=($row);
    }
    echo json_encode($array);//输出的信息就是ajax success返回的信息e
//    $arr=array();
//    $arr[]=1;   //php中数组小标自动累加 
//    
//    json_encode()    //输出类似js中json格式的代码
?>
2.页面修改数据 js代码

tbody.onclick=function(e){
            var ev=e||window.event;
            var targetObj=ev.target||ev.srcElement;
            //编辑功能
            if(targetObj.nodeName="TD"&&targetObj.className!="aa"){ //选择对应的td元素
                var value=targetObj.innerText;
                    targetObj.innerHTML=""
                var input=$("<input>")  //自己建一个表单对象，用来修改
                input.type="text";
                input.value=value;
                targetObj.appendChild(input);
                input.focus();
                input.onblur=function(){ //表单失去焦点事件
                    var val=this.value;
                    if(val==""||val==value){
                        targetObj.innerHTML=value;
                    }else{
                        var ziduan=targetObj.className;
                        var id=targetObj.parentNode.id;
                        ajax({
                            url:"ajax.php",
                            data:{id:id,type:ziduan,value:val},  //传输对应的修改内容字段
                            success:function(text){
                                if(text==1){//php中输出的是影响行数，修改成功后影响行数为1
                                    targetObj.innerHTML=val;   //编辑成功，将表单中的值赋值给页面表格内容
                                }else{
                                    alert("编辑失败")
                                }
                            }
                        })
                    }
                }
            }
        }
ajax.php

<?php
    $db=new mysqli("localhost","root","","student");
    $db->query("set names utf8");
    $id=$_GET["id"];   //获取ajax传的数据
    $ziduan=$_GET["type"];
    $value=$_GET["value"];
    $sql="update xinxi set {$ziduan}='{$value}' where id=".$id;//前面字段不加引号
    $result=$db->query($sql);  //返回操作的行数
    echo $db->affected_rows;
?>
```

# PHP调用接口以及JSON的解析
```
写微信公众平台的时候需要用到php直接调用它的接口，结果到最后发现订阅号没有一部分的权限。所以只能当学PHP了。

具体用到的函数：

fopen() 函数打开文件或者 URL。

如果打开失败，本函数返回 FALSE。

fopen(filename,mode,include_path,context)
参数	描述
filename	必需。规定要打开的文件或 URL。
mode	必需。规定要求到该文件/流的访问类型。可能的值见下表。
include_path	可选。如果也需要在 include_path 中检索文件的话，可以将该参数设为 1 或 TRUE。
context	可选。规定文件句柄的环境。Context 是可以修改流的行为的一套选项。
在 PHP 中获取一个页面的内容，可以使用 fopen() 函数远程页面然后使用fread() 函数循环获取内容。
假设接口文件页面为：http://www.qttc.net/api.php?action=open_getBlogList&only_recommend=1&limit=5 ，那
么我们可以使用下面语句获取这个接口文件内容，这样 content 保存的就是 JSON api 内容。


$handle = fopen("http://www.qttc.net/api.php?action=open_getBlogList&only_recommend=1&limit=5","rb");
$content = "";
while (!feof($handle)) {
    $content .= fread($handle, 10000);
}
fclose($handle);
PHP 解析 JSON 并显示：原始的内容是无法直接调用的，必须被 PHP 进行进一步处理，才
能被调用显示在网页中。
在 PHP 5.2 及后续版本中，使用 json_decode() 函数来解析 JSON 数据，将其转换成 PHP 可以调用的数据格式。
 $content = json_decode($content);
详细见PHP手册，解析后的格式为数组，可按需调用。http://php.net/manual/en/function.json-decode.php

上面的方法用到的PHP版本略为高级，
像是W3C这样的文档里面很难查到json_deode( )这样高端的函数，所以还有一种进行调用并且解析的方法：
file_get_contents() 函数把整个文件读入一个字符串中，
file_get_contents() 把文件读入一个字符串。
file_get_contents() 函数是用于将文件的内容读入到一个字符串中的首选方法。

file_get_contents(path,include_path,context,start,max_length)
参数	描述
path	必需。规定要读取的文件。
include_path	可选。如果也想在 include_path 中搜寻文件的话，可以将该参数设为 "1"。
context	
可选。规定文件句柄的环境。

context 是一套可以修改流的行为的选项。若使用 null，则忽略。

start	可选。规定在文件中开始读取的位置。该参数是 PHP 5.1 新加的。
max_length	可选。规定读取的字节数。该参数是 PHP 5.1 新加的。

示例：
http://localhost/operate.php?act=get_user_list&type=json
用GET方式的直接使用： 
$file_contents = file_get_content('http://localhost/operate.php?act=get_user_list&type=json') 

POST方式得用下面的(需要开启PHP curl支持)。 
 $url = 'http://localhost/operate.php?act=get_user_list&type=json';
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
curl_setopt ( $ch, CURLOPT_POST, 1 ); //启用POST提交
$file_contents = curl_exec ( $ch );
curl_close ( $ch );

```

# php 调用远程url的六种方法小结
```
　　示例代码1: 用file_get_contents 以get方式获取内容

　　<?php

　　$url='http://www.baidu.com/';

　　$html=file_get_contents($url);

　　//print_r($http_response_header);

　　ec($html);

　　printhr();

　　printarr($http_response_header);

　　printhr();

　　?>
```

```
　　示例代码2: 用fopen打开url, 以get方式获取内容

　　<?

　　$fp=fopen($url,'r');

　　printarr(stream_get_meta_data($fp));

　　printhr();

　　while(!feof($fp)){

　　$result.=fgets($fp,1024);

　　}

　　echo"url body: $result";

　　printhr();

　　fclose($fp);

　　?>
```

```
　　示例代码3：用file_get_contents函数,以post方式获取url

　　<?php

　　$data=array('foo'=>'bar');

　　$data=http_build_query($data);

　　$opts=array(

　　'http'=>array(

　　'method'=>'POST',

　　'header'=>"Content-type:application/x-www-form-urlencoded\r\n".

　　"Content-Length:".strlen($data)."\r\n",

　　'content'=>$data

　　),

　　);

　　$context=stream_context_create($opts);

　　$html=file_get_contents('http://localhost/e/admin/test.html',false,$context);

　　echo$html;

　　?>
```

```
　　示例代码4：用fsockopen函数打开url，以get方式获取完整的数据，包括header和body

　　<?

　　functionget_url($url,$cookie=false){

　　$url=parse_url($url);

　　$query=$url[path]."?".$url[query];

　　ec("Query:".$query);

　　$fp=fsockopen($url[host],$url[port]?$url[port]:80,$errno,$errstr,30);

　　if(!$fp){

　　returnfalse;

　　}else{

　　$request="GET$queryHTTP/1.1\r\n";

　　$request.="Host:$url[host]\r\n";

　　$request.="Connection:Close\r\n";

　　if($cookie)$request.="Cookie:$cookie\n";

　　$request.="\r\n";

　　fwrite($fp,$request);

　　while(!@feof($fp)){

　　$result.=@fgets($fp,1024);

　　}

　　fclose($fp);

　　return$result;

　　}

　　}

　　//获取url的html部分，去掉header

　　functionGetUrlHTML($url,$cookie=false){

　　$rowdata=get_url($url,$cookie);

　　if($rowdata)

　　{

　　$body=stristr($rowdata,"\r\n\r\n");

　　$body=substr($body,4,strlen($body));

　　return$body;

　　}

　　returnfalse;

　　}

　　?>
```
```
示例代码5：用fsockopen函数打开url，以POST方式获取完整的数据，包括header和body

　　<?

　　functionHTTP_Post($URL,$data,$cookie,$referrer=""){

　　// parsing the given URL

　　$URL_Info=parse_url($URL);

　　// Building referrer

　　if($referrer=="")// if notgiven use this script. as referrer

　　$referrer="111";

　　// making string from $data

　　foreach($dataas$key=>$value)

　　$values[]="$key=".urlencode($value);

　　$data_string=implode("&",$values);

　　// Find out which port is needed - if not given use standard(=80)

　　if(!isset($URL_Info["port"]))

　　$URL_Info["port"]=80;

　　// building POST-request:

　　$request.="POST".$URL_Info["path"]."HTTP/1.1\n";

　　$request.="Host:".$URL_Info["host"]."\n";

　　$request.="Referer:$referer\n";

　　$request.="Content-type:application/x-www-form-urlencoded\n";

　　$request.="Content-length:".strlen($data_string)."\n";

　　$request.="Connection:close\n";

　　$request.="Cookie:$cookie\n";

　　$request.="\n";

　　$request.=$data_string."\n";

　　$fp=fsockopen($URL_Info["host"],$URL_Info["port"]);

　　fputs($fp,$request);

　　while(!feof($fp)){

　　$result.=fgets($fp,1024);

　　}

　　fclose($fp);

　　return$result;

　　}

　　printhr();

　　?>

　　示例代码6:使用curl库，使用curl库之前，你可能需要查看一下php.ini，查看是否已经打开了curl扩展

　　<?

　　$ch = curl_init();

　　$timeout = 5;

　　curl_setopt ($ch, CURLOPT_URL,'http://www.baidu.com/');

　　curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

　　curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

　　$file_contents = curl_exec($ch);

　　curl_close($ch);

　　echo $file_contents;

　　?>
```

```
　　稍微有点意义的函数是：get_content_by_socket(), get_url(), get_content_url(),get_content_object 几个函数，也许能够给你点什么想法。

　　<?php

　　//获取所有内容url保存到文件

　　function get_index($save_file,$prefix="index_"){

　　$count = 68;

　　$i = 1;

　　if (file_exists($save_file)) @unlink($save_file);

　　$fp = fopen($save_file, "a+")or die("Open ". $save_file." failed");

　　while($i<$count){

　　$url = $prefix . $i.".htm";

　　echo "Get ". $url."...";

　　$url_str = get_content_url(get_url($url));

　　echo " OK\n";

　　fwrite($fp, $url_str);

　　++$i;

　　}

　　fclose($fp);

　　}

　　//获取目标多媒体对象

　　function get_object($url_file, $save_file,$split="|--:**:--|"){

　　if (!file_exists($url_file)) die($url_file ."not exist");

　　$file_arr = file($url_file);

　　if (!is_array($file_arr) || empty($file_arr)) die($url_file." not content");

　　$url_arr = array_unique($file_arr);

　　if (file_exists($save_file)) @unlink($save_file);

　　$fp = fopen($save_file, "a+")or die("Open save file ".$save_file ." failed");

　　foreach($url_arr as $url){

　　if (empty($url)) continue;

　　echo "Get ". $url."...";

　　$html_str = get_url($url);

　　echo $html_str;

　　echo $url;

　　exit;

　　$obj_str = get_content_object($html_str);

　　echo " OK\n";

　　fwrite($fp, $obj_str);

　　}

　　fclose($fp);

　　}

　　//遍历目录获取文件内容

　　function get_dir($save_file, $dir){

　　$dp = opendir($dir);

　　if (file_exists($save_file)) @unlink($save_file);

　　$fp = fopen($save_file, "a+")or die("Open save file ".$save_file ." failed");

　　while(($file = readdir($dp)) != false){

　　if ($file!="."&&$file!=".."){

　　echo "Read file ". $file."...";

　　$file_content = file_get_contents($dir . $file);

　　$obj_str = get_content_object($file_content);

　　echo " OK\n";

　　fwrite($fp, $obj_str);

　　}

　　}

　　fclose($fp);

　　}

　　//获取指定url内容

　　function get_url($url){

　　$reg ='/^http:\/\/[^\/].+$/';

　　if (!preg_match($reg, $url)) die($url ."invalid");

　　$fp = fopen($url, "r") ordie("Open url: ". $url." failed.");

　　while($fc = fread($fp, 8192)){

　　$content .= $fc;

　　}

　　fclose($fp);

　　if (empty($content)){

　　die("Get url: ". $url." content failed.");

　　}

　　return $content;

　　}

　　//使用socket获取指定网页

　　function get_content_by_socket($url, $host){

　　$fp = fsockopen($host, 80) or die("Open". $url ."failed");

　　$header = "GET /".$url." HTTP/1.1\r\n";

　　$header .= "Accept: *i";

　　$reg ='/^(down.*?\.html)$/i';

　　preg_match_all ($rex, $file_contents, $r);

　　$result = ""; //array();

　　foreach($r as $c){

　　if (is_array($c)){

　　foreach($c as $d){

　　if (preg_match($reg, $d)){ $result .= $host_url .$d."\n"; }

　　}

　　}

　　}

　　return $result;

　　}

　　//获取指定内容中的多媒体文件

　　function get_content_object($str,$split="|--:**:--|"){

　　$regx ="/href\s*=\s*['\"]*([^>'\"\s]+)[\"'>]*\s*(<b>.*?<\/b>)/i";

　　preg_match_all($regx, $str, $result);

　　if (count($result) == 3){

　　$result[2] =str_replace("<b>多媒体：", "",$result[2]);

　　$result[2] =str_replace("</b>","", $result[2]);

　　$result = $result[1][0] . $split .$result[2][0] ."\n";

　　}

　　return $result;

　　}

　　?>
```

