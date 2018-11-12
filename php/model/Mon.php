<?php
require_once("Root.php");
class Mon extends Root
{
	private $ma_nganh;
	private $ten_mon;
	
	function __construct(){}

	/*get,set ma_nganh*/
	function setMaNganh($ma_nganh){
		$this->ma_nganh = $ma_nganh;
	}
	function getMaNganh(){
		return $this->ma_nganh;
	}

	/*get,set ten_mon*/
	function setTenMon($ten_mon){
		$this->ten_mon = $ten_mon;
	}
	function getTenMon(){
		return $this->ten_mon;
	}
}
?>