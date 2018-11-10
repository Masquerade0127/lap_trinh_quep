<?php
require("../model/CauHoi.php");
require("../model/DapAn.php");
require("../model/HinhAnh.php");
	$cau_hoi = new CauHoi();
	$dap_an = new DapAn();
	$hinh_anh = new HinhAnh();
	if(isset($_POST["submit"])){
		// echo $_POST["text_cauhoi"];
		//insert cau hoi
		$cau_hoi->insertCauHoi(1, $_POST["text_cauhoi"], $_POST["cauhoi"]);
		$hinh_anh->insertImages($_FILES["image_cau_hoi"], "cau_hoi");

		//insert dap an a
		$dap_an->insertDapAn($_POST["text_dapan1"], $_POST["dapan1"]);
		$hinh_anh->insertImages($_FILES["image_dapan1"], "dap_an");

		//insert dap an b
		$dap_an->insertDapAn($_POST["text_dapan2"], $_POST["dapan2"]);
		$hinh_anh->insertImages($_FILES["image_dapan2"], "dap_an");

		//insert dap an c
		$dap_an->insertDapAn($_POST["text_dapan3"], $_POST["dapan3"]);
		$hinh_anh->insertImages($_FILES["image_dapan3"], "dap_an");

		//insert dap an d
		$dap_an->insertDapAn($_POST["text_dapan4"], $_POST["dapan4"]);
		$hinh_anh->insertImages($_FILES["image_dapan4"], "dap_an");

		//insert dap an e
		$dap_an->insertDapAn($_POST["text_dapan5"], $_POST["dapan5"]);
		$hinh_anh->insertImages($_FILES["image_dapan5"], "dap_an");

		//insert dap an e
		$dap_an->insertDapAn($_POST["text_dapan6"], $_POST["dapan6"]);
		$hinh_anh->insertImages($_FILES["image_dapan6"], "dap_an");

		header("Location: http://localhost/lap_trinh_quep/php/views/taocauhoi.php");
	}
?>