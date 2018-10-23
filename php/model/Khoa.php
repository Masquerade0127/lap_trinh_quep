<?php
require("Root.php");
class Khoa extends Root{
	private $ten_khoa;

	// contructor
	function __contruct(){}

	/*
	 * đặt tên khoa theo tham số truyền vào
	 * input: chuỗi tên khoa
	 * output: none
	 */
	public function setTenKhoa($ten_khoa){
		$this->ten_khoa = $ten_khoa;
	}

	public function getTenKhoa(){
		return $this->ten_khoa;
	}
}
?>