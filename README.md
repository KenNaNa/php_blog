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

# PHP调用接口以及JSON的解析

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

