<?php
require("Root.php");
class CauHoi extends Root{
	private $ma_de_thi;
	private $noi_dung;
	private $muc_do;

	function __construct(){}

	/*
	 * get, set ma_de_thi
	 */
	function setMaDeThi($ma_de_thi){
		$this->ma_de_thi = $ma_de_thi;
	}
	function getMaDeThi(){
		return $this->ma_de_thi;
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
	 * get, set muc_do
	 */
	function setMucDo($muc_do){
		$this->muc_do = $muc_do;
	}
	function getMucDo(){
		return $this->muc_do;
	}
}
?>