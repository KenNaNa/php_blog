<?php
class Admin {
    public function __construct() {
        if($this->top === null) {
            return;
        }
        $this->toper = new $this->top();
    }

    public function proc($danger) {
        if($danger <= $this->power) {
            $this->doProc();
        } else {
            $this->toper->proc($danger);
        }
    }
}

class Banzhu extends Admin {
    protected $power = 1;
    protected $top = 'Police';


    protected function doProc() {
            echo '删帖';
    }
}

class Police extends Admin {
    protected $power = 2;
    protected $top = 'Guoan';

    public function doProc() {
        echo '抓人';
    }
}

class Guoan extends Admin {
    protected $power = 3;
    protected $top = null;

    public function doProc() {
        echo '灭口';
    }
}



$danger = 3;

$admin = new Banzhu();
$admin->proc($danger);

print_r($admin);
