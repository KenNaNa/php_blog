<?php  
	function get_real_ip(){
		$ip=false;

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){

        $ip=$_SERVER['HTTP_CLIENT_IP'];

    }

    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

        $ips=explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);

        if($ip){ array_unshift($ips, $ip); $ip=FALSE; }

        for ($i=0; $i < count($ips); $i++){

            if(!eregi ('^(10│172.16│192.168).', $ips[$i])){

                $ip=$ips[$i];

                break;

            }

        }

    }

    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
	}
?>


<?php  

	function get_real_ip(){

    static $realip;

    if(isset($_SERVER)){

        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){

            $realip=$_SERVER['HTTP_X_FORWARDED_FOR'];

        }else if(isset($_SERVER['HTTP_CLIENT_IP'])){

            $realip=$_SERVER['HTTP_CLIENT_IP'];

        }else{

            $realip=$_SERVER['REMOTE_ADDR'];

        }

    }else{

        if(getenv('HTTP_X_FORWARDED_FOR')){

            $realip=getenv('HTTP_X_FORWARDED_FOR');

        }else if(getenv('HTTP_CLIENT_IP')){

            $realip=getenv('HTTP_CLIENT_IP');

        }else{

            $realip=getenv('REMOTE_ADDR');

        }

    }

    return $realip;

}
?>


<?php  
	// 获取IP地址（摘自discuz）

function getIp(){

    $ip='未知IP';

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){

        return is_ip($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:$ip;

    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

        return is_ip($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$ip;

    }else{

        return is_ip($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:$ip;

    }

}

function is_ip($str){

    $ip=explode('.',$str);

    for($i=0;$i<count($ip);$i++){ 

        if($ip[$i]>255){ 

            return false; 

        } 

    } 

    return preg_match('/^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$/',$str); 

}
?>