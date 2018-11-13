<!-- begin thanh menu -->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	    	<!-- icon home -->
	        <a class="navbar-brand" href="#"><img src="../../image/icon_home.png"></a>
	        <!-- button respon -->
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">

	            <ul class="navbar-nav mr-auto chu_xanh">
	            	<!-- danh sách các khoa -->
	                <li class="nav-item dropdown">
	                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-right: 1px solid blue; border-left: 1px solid blue; color: blue;">
	        				Khoa CNTT
	        			</a>
	                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 8%;">
                        <!--Ngành thuộc khoa-->                       
	                        <?php 
	                        	include("C:/xampp/htdocs/lap_trinh_quep/php/process/menu.php");
								foreach($nganh1 as $value){
									echo "<a class='dropdown-item chu_xanh' style='color: blue;' href='../../php/views/monhoc.php?".$value["ID"]."'>".$value['ten_nganh']."</a>";
								}
	                        ?>
					   </div>
	                </li>
	                <!-- lien he -->
	                <li class="nav-item">
	                	<a class="nav-link" href="#" role="button" style="border-right: 1px solid blue; color: blue;">Liên hệ</a>	
	                </li>
	                
	            </ul>
	            
	        </div>
	    </nav>
	</div>
	<!-- end thanh menu -->