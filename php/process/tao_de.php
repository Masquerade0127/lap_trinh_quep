<?php
require("../model/CauHoi.php");
require("../model/DapAn.php");
require("../model/cauhoi_dapan.php");
		$cau_hoi = new CauHoi();
		$dap_an = new DapAn();
		$cauhoi_dapan = new CauHoi_DapAn();
		
		$cau_hoi->getCauHoi(1, 2);
		/*if(isset($_POST["submit"])){
			if(isset($_POST["ch_de"])){
				$id_cauhoi = $cau_hoi->getCauHoi(1, 2);
				shuffle($id_cauhoi);
				foreach ($id_cauhoi as $value) {
					echo $value["noi_dung"]."<br>"."<hr>";
					$cau_hoi = $dap_an->getDapAn($value["ID"], "sai");
					shuffle($cau_hoi);
					foreach ($cau_hoi as $value) {
						echo $value["noi_dung"];
					}
				}
			}
		}*/
		/*foreach ($id_cauhoi as $value) {
			echo $value["noi_dung"]."<br>";
			$ds_dap_an = 
			foreach ($ds_dap_an as $value_1) {
				echo $value_1["noi_dung"]."-"."<hr>";
			}
		}*/
		/*$array_l = $cauhoi_dapan->getCauHoi_DapAn(1,2);*/
		/*shuffle($array_l);
		//lay mang cau hoi va dap an
		foreach ($array_l as $value) {
			echo $value["cau_hoi"]." ".$value["dap_an"]."<br>";
		}*/
?>