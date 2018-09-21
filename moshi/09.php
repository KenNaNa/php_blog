<?php 
/**
布尔教育: http://www.itbool.com
课后论坛: http://www.zixue.it
**/

// 装饰器模式

class Art {
    protected $content;
    public function __construct($content) {
        $this->content = $content;
    } 

    public function decorator() {
        return $this->content;
    }
}

class SeoArt extends Art {
    public function decorator() {
        return parent::decorator() . ' SEO Keywords';
    }
}

class AdArt extends SeoArt {
    public function decorator() {
        return parent::decorator() . ' 广告文本';
    }
}

/*
$art = new SeoArt('世界大力世比赛');
echo $art->decorator();
*/

$ad = new AdArt('世界大力世比赛');
echo $ad->decorator();


?>