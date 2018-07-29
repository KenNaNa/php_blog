<?php  
	$url = "http://118.190.209.124/阴阳师项目/home.html";
	if (!filter_var($url) === false) {
	    echo  "<a href='$url' target='_blank'>这个是我的服务器链接地址<a>";
	} else {
	    echo  "$url 不是一个合法的 URL";
	}
?>