<meta charset="utf-8">
<?php  
// 抽象类
abstract class aDB {
	/**
	* 链接数据库配置
	*/
	abstract public function conn();
	/**
	* 发送 query 查询
	* @param string $sql sql 语句
	* @return mixed
	*/
	abstract public function query($sql);
	/**
	* 查询多行数据
	* @param string $sql sql语句
	* @return array
	*/
	abstract public function getAll($sql);
	/**
	* 查询单行数据
	* @param string $sql sql语句
	* @return array
	*/
	abstract public function getRow($sql);
	/**
	* 查询一个数据值 count(*)
	* @param string $sql sql语句
	* @return mixed
	*/
	abstract public function getOne($sql);
	/**
	* 自动创建 sql 语句，并执行
	* @param array $data 关联数组 键值/与表中的列值
	* @param string $table 表名
	* @param string $act 动作/update/insert
	* @param string $where 条件，用于update
	* @return int 影响行数
	*/
	abstract public function Exec($data , $table , $act='insert' , $where='0');
	/**
	* 返回上一条insert的主键值
	*/
	abstract public function lastId();
	/**
	* 返回上一条影响的行数
	*/
	abstract public function affectRows();

}

	// 实现抽象类
	class Mysql extends aDB{
		public $link;
		public function __construct(){
			$this->conn();
		}
		/**
		 * 从配置文件里读取
		 * @return [type] [description]
		 */
		public function conn(){
			$cfg = include('./config.php');
			$this->link = new mysqli($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['dbname']);
		}

		public function query($sql){
			return $this->link->query($sql);
		}

		public function getAll($sql){
			$arr = [];
			$res = $this->query($sql);
			while($row = $res->fetch_assoc()){
				$arr[] = $row;
			}
			return $arr;
		}

		public function getRow($sql){
			$res = $this->query($sql);
			$row = $res->fetch_assoc();
			return $row;
		}

		public function getOne($sql){
			$res = $this->query($sql);
			$row = $res->fetch_row();
			$one = $row[0];
			return $one;
		}
		/**
		* 自动创建 sql 语句，并执行
		* @param array $data 关联数组 键值/与表中的列值
		* @param string $table 表名
		* @param string $act 动作/update/insert
		* @param string $where 条件，用于update
		* @return int 影响行数
		*/
		public function Exec($data , $table , $act='insert' , $where='0'){
			if($act=='insert'){
				$sql = "insert into ".$table;
				$sql.=" (".implode(',',array_keys($data)).") ";
				$sql.=" values ('".implode("','",array_values($data))."')";
			}else{
				// update
				$sql = "update ".$table." set ";
				foreach ($data as $k => $v) {
					$sql.= $k."='".$v."',";
				}
				$sql = rtrim($sql,',');
				$sql.=" where id=".$where;

			}
			return $this->query($sql);

		}

		public function lastId(){
			return $this->link-insert_id;
		}

		public function affectRows(){
			return $this->link->affected_rows;
		}
	}

	$mysql = new Mysql();
	$res = $mysql->Exec(["address"=>"广东中山","content"=>"Hello"],"lovewall","update","1");
	var_dump($res);
?>