<?php
	require_once("C:/xampp/htdocs/lap_trinh_quep/php/model/lop.php");
	require_once("C:/xampp/htdocs/lap_trinh_quep/php/model/root.php");
	$url = new Root();
	$url1 = $url->getCurrentPageURL();
	$lop = new Lop();
	$lop1 = $lop->getLop($url1);
?>