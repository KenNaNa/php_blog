<?php  
	$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
		echo '这个ip地址不属于ipv6级别的';
	}else{
		echo "这个IP地址属于ipv6级别的";
	}
?>