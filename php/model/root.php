<?php
require_once('Connect.php');
class Root extends Connect{
	private $id;

	/*get ID*/
	function getId(){
		
	}

	/*
	 * lay gia tri cot cua bang theo id
	 * input: id, table, column
	 * output: mang cac gia tri cua cot
	 */
	function getColumnValue($id, $table, $column){
		$query = "select $column from $table where ID=$id";
		$result = Connect::getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}

	/*
	 * lay tat ca cac cot
	 * input: table
	 * output: mang cac gia tri cua cot
	 */
	function getColumn($table){
		$query = "select * from $table";
		$result = Connect::getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}	

	/*
	 * kiem tra dang nhap
	 * input: none
	 * output: none
	 */
	function checkLoggin(){
		session_start();
		if (!isset($_SESSION["ID"]) && !isset($_SESSION["password"])) {
			header("Location: http://localhost/lap_trinh_quep/loggin.html");
		}
	}

	/*
	 * ma hoa password theo chuan SHA256
	 * input: password
	 * output: chuoi SHA256
	 */
	function encryptPassword($password){
		return hash("sha256", $password);
	}

	/*
	 * insert user
	 * input: 
	 * output: 
	 */
	function insertUser($id, $password){
		$pass = $this->encryptPassword($password);
		$query = "insert into user(ID, password) values($id, '$pass')";
		Connect::getConnect()->query($query);
	}
}
$khoa = new Root();
$khoa->insertUser(1, 1);
?>