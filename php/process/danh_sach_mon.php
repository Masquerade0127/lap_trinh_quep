<?php
require("../model/Mon.php");
require_once("C:/xampp/htdocs/lap_trinh_quep/php/model/root.php");
$url = new Root();
$url1 = $url->getCurrentPageURL();
$mon = new Mon();
$danh_sach = $mon->getColumn($url1);
?>