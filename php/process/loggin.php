<?php
require("../model/User.php");
if(isset($_POST["ID"]) && isset($_POST["password"])){
	$password = new User();
	$pass = hash("sha256", $_POST["password"]);
	if($pass === $password->getPassword($_POST["ID"])){
		session_start();
		$_SESSION["ID"] = $_POST["ID"];
		$_SESSION["password"] = $_POST["password"];
		header("Location: http://localhost/lap_trinh_quep/php/index.php");
		echo "<script>alert('đăng nhập thành công')</script>";
	}
	else{
		header("Location: http://localhost/lap_trinh_quep/loggin.html");
		echo "<script>alert('đăng nhập thất bại')</script>";
	}
	
}

?>