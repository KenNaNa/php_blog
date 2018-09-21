<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

class Msg {
    public function send($to , $cont) {

    }
}


class Zhan extends Msg {
    public function send($to , $cont) {
        return  $cont . '站内发给' . $to;
    }
}

class Email extends Msg {
    public function send($to , $cont) {
        return  $cont . 'Email发给' . $to;
    }
}

class Sms extends Msg {
    public function send($to , $cont) {
        return  $cont . '短信发给' . $to;
    }
}


class Common  {
    public function send($cont) {
        return  '慢速:' . $cont;
    }

}
class Warning {
    public function send($cont) {
        return  '中速:' . $cont;
    }

}

class Danger {
    public function send($cont) {
        return  '急速:' . $cont;
    }
}


$email = new Email();
$sms = new SMS();
$warn = new Warning();
$dang = new Danger();
echo $warn->send($email->send('lisi' , '考试了')) , "<br>";
echo $dang->send($sms->send('lisi' , '挂科了')) , "<br>";


?>