<?php
require("../model/HinhAnh.php");
if(isset($_POST["submit"]) && isset($_FILES["image"])){
	$hinh_anh = new HinhAnh();
	/*
	 * $hinh_anh->loadImages($_FILES["image"], "cau_hoi");
	 * tham so thu 2: 'cau_hoi'/'dap_an'
	 * chu y dat cho dung tham so
	 * cu goi den ham nay theo cu phap nhu tren la tu chay dung
	 */
}
?>