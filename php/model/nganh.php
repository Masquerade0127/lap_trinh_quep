<?php
require("Root.php");
class Nganh extends Root{
	private $ma_khoa;
	private $ten_nganh;

	// contructor
	function __contruct(){}
	

	/*
	 * get, set ma_khoa
	 */
	public function setTenNganh($ten_nganh){
		$this->ten_nganh = $ten_nganh;
	}
	public function getTenNganh(){
		return $this->ten_nganh;
	}

	/*
	 * get, set ten_nganh
	 */
	public function setTenNganh($ten_nganh){
		$this->ten_nganh = $ten_nganh;
	}
	public function getTenNganh(){
		return $this->ten_nganh;
	}
}
?>