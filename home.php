<?php
	include("html/component/header.html");
	?>
	<!-- begin thanh menu -->
	<div class="container" style="margin: 0; max-width: 100%;">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	    	<!-- icon home -->
	        <a class="navbar-brand" href="#"><img src="../../image/icon_home.png"></a>
	        <!-- button respon -->
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">

	            <ul class="navbar-nav mr-auto">
	            	<!-- danh sach khoa cntt -->
	                <li class="nav-item dropdown">
	                    <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-right: 1px solid blue; border-left: 1px solid blue; color: #0d28f2">
	        				Khoa CNTT
	        			</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #0d28f2; padding: 5px;">
						  <a class="dropdown-item sub-menu dropdown-toggle" style="background-color: white; color: #0d28f2; margin-bottom: 5px;" href="#">Kỹ thuật phần mềm</a>
						  <a class="dropdown-item sub-menu dropdown-toggle" style="background-color: white; color: #0d28f2; margin-bottom: 5px;" href="#">Khoa học máy tính</a>
						  <a class="dropdown-item sub-menu dropdown-toggle" style="background-color: white; color: #0d28f2; margin-bottom: 5px;" href="#">Hệ thống thông tin</a>
						</div>
	                </li>
	                <!-- lien he -->
	                <li class="nav-item" >
	                	<a href="#" role="button" style="color: #0d28f2">Liên hệ</a>	
	                </li>
	                
	            </ul>
	        </div>
			<button type="button" class="btn btn-primary">Đăng nhập</button>
	    </nav>
		
	</div>
	<div class="content" style="background: url('../../image/bgr_content.png'); background-size: 100%; height:800px">
	</div>

<?php
	include("html/component/footer.html");
?>