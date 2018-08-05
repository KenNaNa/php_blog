<?php  
	class Mysql extends aDB{
		public $link;
		public function __construct(){
			$this->conn();
		}
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
	
?>