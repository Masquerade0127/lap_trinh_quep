<?php
require("Root.php");
class DapAn extends Root{
	private $ma_cau_hoi;
	private $noi_dung;
	private $trang_thai;

	function __construct(){}

	/*
	 * get, set ma_cau_hoi
	 */
	function setMaCauHoi($ma_cau_hoi){
		$this->ma_cau_hoi = $ma_cau_hoi;
	}
	function getMaCauHoi(){
		return $this->ma_cau_hoi;
	}

	/*
	 * get, set noi_dung
	 */
	function setNoiDung($noi_dung){
		$this->noi_dung = $noi_dung;
	}
	function getNoiDung(){
		return $this->noi_dung;
	}

	/*
	 * get, set ma_cau_hoi
	 */
	function setTrangThai($trang_thai){
		$this->trang_thai = $trang_thai;
	}
	function getTrangThai(){
		return $this->trang_thai;
	}
}
?>