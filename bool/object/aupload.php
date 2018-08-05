<?php  
	abstract class aUpload {
		public $allowExt = array('jpg' , 'jpeg' , 'png' , 'rar');
		public $maxSize = 1; // 最大上传，以M为单位
		protected $error = ''; // 错误信息
		/**
		* 分析$_FILES中$name域中的信息
		* @param string $name 表单中 name 属性 的值
		* @return array 上传文件的信息
		*/
		abstract public function getInfo($name);
		/**
		* 创建目录
		* @return string 目录路径
		*/
		abstract public function createDir();
		/**
		* 生成随机文件名
		* @param int $len 随机字符串长度
		* @return string 指定长度的随机字符串
		*/
		abstract public function randStr($len = 8);
		/**
		* 上传文件
		* @param string $name 表单中的 name 属性的值
		* @return string 上传文件路径
		*/
		abstract public function up($name);
		/*
		判断 $_FILES[$name]
		调用 getInfo 分析文件大小,后缀
		调用 checkType
		调用 checkSize
		调用 createDir
		调用 randStr 生成随机文件名
		移动，返回路景观
		*/
		/**
		* 检查文件类型
		* @param $ext 文件后最
		* @return boolean
		*/
		abstract protected function checkType($ext);
		/**
		* 检查文件大小
		* @param $size 文件大小
		* @return boolean
		*/
		abstract protected function checkSize($size);
		/**
		* 错误信息
		*/
		public function getError() {
			return $this->error;
		}
	}

?>