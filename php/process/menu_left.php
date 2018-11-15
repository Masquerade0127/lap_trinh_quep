<?php
	require_once("../model/lop.php");
	require_once("../model/root.php");
	/*$url = new Root();
	$url1 = $url->getCurrentPageURL();*/
	$lop = new Lop();
	$lop1 = $lop->getLop(3);
?>