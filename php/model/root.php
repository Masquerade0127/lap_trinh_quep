<?php
require_once('Connect.php');
class Root{
	private $id;

	/*get ID*/
	function getId(){
		return $this->id;
	}

	/*
	 * lay gia tri cot cua bang theo od
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
	 * kiem tra dang nhap
	 * input: none
	 * output: none
	 */
	function checkLoggin(){
		if (!isset($_SESSION["id"]) && !isset($_SESSION["password"])) {
			header("http://localhost/lap_trinh_quep/loggin.html");
		}
	}
}
/*$khoa = new Root();
foreach ($khoa->getColumnValue(2,"khoa","*") as $key) {
 	echo $key["ten_khoa"];
}*/
?>