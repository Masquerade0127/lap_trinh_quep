<?php
require_once("../model/root.php");
class CauHoi_DapAn extends Root
{
	function __construct(){}

	function getCauHoi($id_mon, $muc_do){
		$query = "select noi_dung from cau_hoi where ma_mon_hoc=$id_mon and muc_do='$muc_do'";
		$result = $this->getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}

	/*
	 * lay gia tri cau hoi va dap an
	 * intput: 
	 */
	function getCauHoi_DapAn($id_mon, $muc_do){
		$query = "select cau_hoi.noi_dung as cau_hoi, dap_an.noi_dung as dap_an 
					from cau_hoi, dap_an, cauhoi_dapan 
					where cau_hoi.ma_mon_hoc=$id_mon
						and cau_hoi.muc_do='$muc_do' 
						and cau_hoi.ID=cauhoi_dapan.ma_cau_hoi
						and dap_an.ID=cauhoi_dapan.ma_dap_an";
		$result = $this->getConnect()->query($query);
		$index = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$array[$index] = $row;
			$index++;
		}
		return $array;
	}

	/*
	 * insert id cau hoi/dap an
	 * input: ten cot, gia tri
	 * output: none
	 */
	function insert($column, $value){
		$query = "insert into cauhoi_dapan('$column') values('$value')";
		$this->getConnect()->query($query);
	}
}
?>