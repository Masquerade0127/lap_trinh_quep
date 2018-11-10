<?php
require_once("Root.php");
class GiangVien extends Root{
	private $ma_nganh;
	private $ten_gv;
	private $ngay_sinh;
	private $dia_chi;
	private $sdt;
	private $email;

	function __construct(){}

	/*
	 * get, set ma_nganh
	 */
	function setMaNganh($ma_nganh){
		$this->ma_nganh = $ma_nganh;
	}
	function getMaNganh(){
		return $this->ma_nganh;
	}

	/*
	 * get, set ten_gv
	 */
	function setTenGV($ten_gv){
		$this->ten_gv = $ten_gv;
	}
	function getTenGV(){
		return $this->ten_gv;
	}

	/*
	 * get, set ngay_sinh
	 */
	function setNgaySinh($ngay_sinh){
		$this->ngay_sinh = $ngay_sinh;
	}
	function getNgaySinh(){
		return $this->ngay_sinh;
	}

	/*
	 * get, set dia_chi
	 */
	function setDiaChi($dia_chi){
		$this->dia_chi = $dia_chi;
	}
	function getDiaChi(){
		return $this->dia_chi;
	}

	/*
	 * get, set sdt
	 */
	function setSDT($sdt){
		$this->sdt = $sdt;
	}
	function getMaNganh(){
		return $this->sdt;
	}

	/*
	 * get, set email
	 */
	function setEmail($email){
		$this->email = $email;
	}
	function getEmail(){
		return $this->email;
	}
}
?>