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
?>