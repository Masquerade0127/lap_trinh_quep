<?php
require_once("Root.php");
class Nienkhoa extends Root{
	private $thoi_gian_bat_dau;
	private $thoi_gian_ket_thuc;
	// contructor
	function __contruct(){}
	
	/*
	 * get, set thoi_gian_bat_dau
	 */
	public function setThoigianbatdau($thoi_gian_bat_dau){
		$this->thoi_gian_bat_dau = $thoi_gian_bat_dau;
	}
	public function getThoigianbatdau(){
		return $this->thoi_gian_bat_dau;
	}

	/*
	 * get, set thoi_gian_ket_thuc
	 */
	public function setThoigianketthuc($thoi_gian_ket_thuc){
		$this->thoi_gian_ket_thuc = $thoi_gian_ket_thuc;
	}
	public function getThoigianketthuc(){
		return $this->thoi_gian_ket_thuc;
	}
}
?>