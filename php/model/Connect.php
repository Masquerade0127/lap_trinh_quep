<?php

class Connect{
	function __contructor(){}

	/*
	 * tao ket noi
	 * input: none
	 * output: $connect
	 */
	function getConnect(){
		$connect = new PDO("mysql:dbname=lap_trinh_quep;host:localhost;charset:utf8", "giang_vien", "AlphaHydranoid0123");
		return $connect;
	}
}
?>