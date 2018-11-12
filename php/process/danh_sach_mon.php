<?php
require("../model/Mon.php");
$mon = new Mon();
$danh_sach = $mon->getColumn("mon");
?>