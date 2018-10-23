<?php
require("Root.php");
class HinhAnh extends Root{
	private $ma_cau_hoi;
	private $url;

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
	 * get, set url
	 */
	function setUrl($url){
		$this->url = $url;
	}
	function getUrl(){
		return $this->url;
	}
}
?>