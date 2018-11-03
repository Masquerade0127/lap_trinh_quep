<?php
require("../model/User.php");
if(isset($_POST["ID"]) && isset($_POST["password"])){
	$password = new User();
	if($_POST["password"] == $password->getPassword($_POST["ID"])){
		header("Location: http://localhost/lap_trinh_quep/index.php");
		echo "<script>alert('đăng nhập thành công')</script>";
	}
	else{
		header("Location: http://localhost/lap_trinh_quep/loggin.html");
		echo "<script>alert('đăng nhập thất bại')</script>";
	}
}
?>