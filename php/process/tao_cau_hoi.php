<?php
require("../model/CauHoi.php");
require("../model/DapAn.php");
require("../model/HinhAnh.php");
	if(isset($_POST["submit"])){
		$cau_hoi = new CauHoi();
		$dap_an = new DapAn();
		$hinh_anh = new HinhAnh();
		$cau_hoi->insertCauHoi($_POST["text_cauhoi"]);
		
	}
?>