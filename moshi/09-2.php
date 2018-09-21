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

class Artdec extends Art {
    protected $art = null;

    public function __construct($art) {
        $this->art = $art;
    }

    public function decorator() {
    }
}

class SeoArt extends Artdec {
     public function decorator() {
        return $this->art->decorator() . ' SEO keywords';
    }   
}

class AdArt extends Artdec {
    public function decorator() {
        return $this->art->decorator() . ' 广告内容';
    }
}

$art = new Art('这是一篇普通文件');
$art = new SeoArt($art);
$art = new AdArt($art);

echo $art->decorator() , "<br>";


$zz = new Art('这是一篇政治文件');
$zz = new SeoArt($zz);
echo $zz->decorator();
?>