<?php
require_once("Root.php");
class Khoa extends Root{
	private $ten_khoa;

	// contructor
	function __contruct(){}

	/*
	 * get, set ten_khoa
	 */
	public function setTenKhoa($ten_khoa){
		$this->ten_khoa = $ten_khoa;
	}

	public function getTenKhoa(){
		return $this->ten_khoa;
	}
}
?>