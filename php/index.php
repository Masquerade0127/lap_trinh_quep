<?php
	include("../html/component/header.html");
	include("../html/component/menu.html");
?>

<?php
	include("model/Root.php");
	$loggin = new Root();
	$loggin->checkLoggin();
?>
<div id="content">
	<img src="../image/bgr_content.png" alt="content" style="width: 100%;">
</div>
<?php
	include("../html/component/footer.html");
?>