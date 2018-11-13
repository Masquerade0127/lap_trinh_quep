<?php
require_once("Root.php");
class Nganh extends Root{
	private $ma_khoa;
	private $ten_nganh;

	// contructor
	function __contruct(){}
	

	/*get, set ma_khoa*/
	function setMaKhoa($ma_khoa){
		$this->ma_khoa = $ma_khoa;
	}
	function getMaKhoa(){
		return $this->ma_khoa;
	}

	/*get, set ten_nganh*/
	function setTenNganh($ten_nganh){
		$this->ten_nganh = $ten_nganh;
	}
	function getTenNganh(){
		return $this->ten_nganh;
	}

	/*
	 * select tat ca nganh thuoc khoa
	 * input: id khoa
	 * output: mang cac nganh
	 */
	function getNganh($id_khoa){
		$query = "select ten_nganh,ID from nganh where ma_khoa=$id_khoa";
		$result = Root::getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}
}
/*$nganh = new Nganh();
foreach ($nganh->getNganh(1) as $value) {
	echo $value["ma_khoa"]. " ". $value["ten_nganh"];
}*/
?>