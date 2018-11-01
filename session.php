<?php
session_start();?>
<?php
//kiem tra dang nhap
if (isset($_SESSION['usernam']))
{
	header('localhost:lap_trinh_quep/home.php');
}else
{
	header('localhost:lap_trinh_quep/loggin.html');
}
?>