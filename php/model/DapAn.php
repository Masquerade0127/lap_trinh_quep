<?php
require_once("Root.php");
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

	/*
	 * insert dap an
	 * input: id noi dung, dap an
	 * output: none
	 */
	function insertDapAn($noi_dung, $trang_thai){
		if($noi_dung != ""){
			$query = "insert into dap_an (noi_dung, trang_thai) values (N'$noi_dung', N'$trang_thai')";
			Root::getConnect()->query($query);	
		}
	}

	/*
	 * lay dap an theo id cau hoi
	 * input: id cau hoi
	 * output: mang cac dap an
	 */
	function getDapAn($id_cau_hoi, $trang_thai){
		$query = "select noi_dung from dap_an, cauhoi_dapan 
					where cauhoi_dapan.ma_cau_hoi=$id_cau_hoi
					and dap_an.ID=cauhoi_dapan.ma_dap_an
					and trang_thai='$trang_thai'";
		$result = $this->getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}
}
/*$dap_an = new DapAn();
$dap_an->setCauHoi(1, "2", "dung");*/
?>