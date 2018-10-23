<?php

class Connect{
	private $connect;
	function __contructor(){}

	/*
	 * tao ket noi
	 * input: none
	 * output: $connect
	 */
	function getConnect(){
		$connect = mysqli_connect("localhost", "root", "", "lap_trinh_quep");
		$connect->set_charset("utf8");
		if(!$connect){
			die("lỗi kết nối " . $connect->connect_errno . ": " . $connect->connect_error);
		}
		return $connect;
	}
}
?>