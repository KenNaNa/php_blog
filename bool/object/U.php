<?php  
	class Upload extends aUpload{
		public function getInfo($name){
			$file = $_FILES[$name];
			return $file;
		}

		public function createDir(){
			$dir = './up/'.date('Y/m',time());
			if(!is_dir($dir)){
				mkdir($dir,0777,true);
			}
			return $dir;
		}

		public function randStr($len = 8){
			$str = md5(time()).mt_rand(111,999);
			return $str;
		}

		protected function checkType($ext){
			return in_array($ext,$this->allowExt);
			
		}

		protected function checkSize($size){
			return $size<$this->maxSize * 1024 *1024;
		}

		public function up($name){
			if(!isset($_FILES[$name])){
				echo "别闹，给文件";
				exit;
			}
			$info = $this->getInfo($name);
			$ext = ltrim(strrchr($info['name'],'.'),'.');
			if(!$this->checkType($ext)){
				echo "别闹，给图片";
				exit;
			}

			if(!$this->checkSize($info['size'])){
				echo "我不喜欢大的";
				exit;
			}

			$dir = $this->createDir();
			$filename = $this->randStr().".".$ext;
			

			if(move_uploaded_file($info['tmp_name'],$dir."/".$filename)){
				$data['path'] = $dir;
				$data['filename'] = $filename;
				return $data;
			}
		}

	}
?>