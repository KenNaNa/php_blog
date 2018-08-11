<?php  
	class Mini{
		public $data = array();
		public function tit($file){
			$h = file_get_contents($file);
			$h = str_replace('{','<?php  echo $this->data[\'',$h);
			$h = str_replace('}','\'];?>',$h);
			$tmp = $file.'.php';
			file_put_contents($tmp,$h);
			return $tmp;
		}
		public function assign($key,$value){
			$this->data[$key] = $value;
		}
		public function display($file){
			$file = $this->tit($file);
			include($file);
		}
	}
	$sql = "sele";
	$tit = "今天下雨了，淋了我半路。。。";
	$mini = new Mini();
	$mini->assign('$tit',$tit);
	$mini->display('1.html');
?>