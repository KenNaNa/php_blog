<?php  
	class MySQL{
		// public $conn;
		public function __construct($server_name,$user_name,$password,$dbname){
			// 创建数据库链接
			$conn = new mysqli($server_name,$user_name,$password,$dbname);
			$this->conn = $conn;
			// 检查连接是否成功
			if($this->conn->connect_error){
				die("Connection failed:".$this->conn->connect_error);
			}
			// 创建连接成功
			echo "Connected successfully";
		}

		// 插入数据
		public function insertSql($sql){

			// 通过query函数，提交插入数据库
			if($this->conn->query($sql)){
				// 插入成功
				echo "A new record created successfully";
			}else{
				// 插入失败
				echo "Error:".$sql."<br/>".$this->conn->error;
			}
		}

		// 删除数据
		public function delSql($sql){
			if($this->conn->query($sql)){
				// 删除成功
				echo "Delete record successfully";
			}else{
				// 删除失败
				echo "Error:".$sql."<br/>".$this->conn->error;
			}
		}

		// 修改数据
		public function updateSql($sql){
			// 通过query函数，执行更新数据
			if($this->conn->query($sql)){
				echo " Update record successfully";
			}else{
				echo "ERROR:".$sql."<br/>".$this->conn->error;
			}
		}

		// 查询数据
		public function selectSql($sql){
			// 通过query函数查询数据库
			$retVal = $this->conn->query($sql);
			while($row = mysqli_fetch_object($retVal)){
				echo strval($row->age);
				echo "<br>";
				var_dump($row);
			}
		}
	}
	// 服务器名称
	$server_name = "localhost";
	$user_name = "root";
	$password = "root";
	$dbname = "MyDataBase";
	$mysql = new MySQL($server_name,$user_name,$password,$dbname);
	$mysql->insertSql("insert into mytableinfo(name,age,height) values('Ken',18,170)");
	$mysql->updateSql("update mytableinfo set age=20 where name='Ken'");
	$mysql->selectSql("select * from mytableinfo where name='Ken'");
?>