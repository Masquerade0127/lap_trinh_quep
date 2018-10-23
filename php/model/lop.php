<?php
require("Root");
class Lop extends Root{
	private $ma_nganh;
	private $ma_nien_khoa;
	private $nam;
	private $ten_lop;

	// contructor
	function __contruct(){}

	/*
	 * get, set ma_nganh
	 */
	public function setMaNganh($ma_nganh){
		$this->ma_nganh = $ma_nganh;
	}
	public function getMaNganh(){
		return $this->ma_nganh;
	}

	/*
	 * get, set ma_nien_khoa
	 */
	public function setMaNienKhoa($ma_nien_khoa){
		$this->ma_nien_khoa = $ma_nien_khoa;
	}
	public function getMaNienKhoa(){
		return $this->ma_nien_khoa;
	}

	/*
	 * get, set nam
	 */
	public function setNam($nam){
		$this->nam = $nam;
	}
	public function getnam(){
		return $this->nam;
	}

	/*
	 * get, set tên lớp
	 */
	public function setTenlop($ten_lop){
		$this->ten_lop = $ten_lop;
	}
	public function getTenlop(){
		return $this->ten_lop;
	}
}
?>