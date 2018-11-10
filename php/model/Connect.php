<?php

class Connect{
	function __contructor(){}

	/*
	 * tao ket noi
	 * input: none
	 * output: $connect
	 */
	function getConnect(){
		$connect = mysqli_connect("localhost", "root", "", "lap_trinh_quep");
		mysqli_set_charset($connect,"UTF8");
		if(!$connect){
			die("lỗi kết nối " . $connect->connect_errno . ": " . $connect->connect_error);
		}
		return $connect;
		/*$connect = new PDO("mysql:dbname=lap_trinh_quep;host:localhost;charset:utf8", "root", "");
		return $connect;*/
	}
}
?>