<?php
require_once('Connect.php');
class Root{
	private $id;
	public $id_2;
	/*
	 * get id
	 * input: none
	 * output: id
	 */
	function getId(){
		return $this->id;
	}

	/*
	 * lấy tên cột theo id 
	 * input: id 
	 * output: tên khoa
	 */
	function getColumnValue($id, $table, $column){
		$query = "select $column from $table where ID=$id";
		if($result = mysqli_query(Connect::getConnect(),$query)){
			$row = mysqli_fetch_assoc($result);
			return $row["$column"];
		}	
	}
}
?>