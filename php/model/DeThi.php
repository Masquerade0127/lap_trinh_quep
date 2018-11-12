<?php
require_once("Root.php");
class DeThi extends AnotherClass
{
	private $ma_giang_vien;
	private $ma_mon;
	private $so_cau_hoi;
	private $ghi_chu;
	private $ngay_ra_de;
	private $hoc_ky;
	private $nam_hoc;

	function __construct(){}

	/*
	 * get, set ma_giang_vien
	 */
	function getMaGiangVien(){
		return $this->ma_giang_vien;
	}
	function setMaGiangVien($ma_giang_vien){
		$this->ma_giang_vien = $ma_giang_vien;
	}

	/*
	 * get, set ma_mon
	 */
	function getMon(){
		return $this->ma_mon;
	}
	function setMon($ma_mon){
		$this->ma_mon = $ma_mon;
	}

	/*
	 * get, set ghi_chu
	 */
	function getGhiChu(){
		return $this->ghi_chu;
	}
	function setGhiChu($ghi_chu){
		$this->ghi_chu = $ghi_chu;
	}

	/*
	 * get, set ngay_ra_de
	 */
	function getNgayRaDe(){
		return $this->ngay_ra_de;
	}
	function setNgayRaDe($ngay_ra_de){
		$this->ngay_ra_de = $ngay_ra_de;
	}

	/*
	 * get, set hoc_ky
	 */
	function getHocKy(){
		return $this->hoc_ky;
	}
	function setHocKy($hoc_ky){
		$this->hoc_ky = $hoc_ky;
	}

	/*
	 * get, set nam_hoc
	 */
	function getNamHoc(){
		return $this->nam_hoc;
	}
	function setNamHoc($nam_hoc){
		$this->nam_hoc = $nam_hoc;
	}
}
?>