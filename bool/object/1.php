<meta charset="utf-8">
<?php  
	$pwd = 'root';
	$dbname = 'blog';
	$options = array(
		'host'=>'localhost',
		'user'=>'root',
		'pwd'=>$pwd,
		'dbname'=>$dbname,
		'charset'=>'utf8'
	);
	class Mysql{
		public $con;
		// 链接数据库
		// 设置字符集
		private function setCharset(){
			mysqli_set_charset($this->con,'set names utf8');
		}
		public function conn($host,$user,$pwd,$dbname){
			$this->con = mysqli_connect($host,$user,$pwd,$dbname);
			$this->setCharset();
		}

		// 查询数据库
		public function query($sql){
			return mysqli_query($this->con,$sql);
		}

		// 获取资源
		public function getAll($sql){
			$data = [];
			$res = $this->query($sql);
			while($row = mysqli_fetch_assoc($res)){
				$data[] = $row;
			}
			return $data;
		}
	}

	$mysql = new Mysql();
	$mysql->conn($options['host'],$options['user'],$options['pwd'],$options['dbname']);
	$a = $mysql->getAll("select * from lovewall");
	echo "<pre>";
	print_r($a);
	echo "</pre>";
?>