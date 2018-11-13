
<style>
	html,
	body {
	  overflow-x: hidden; /* Prevent scroll on narrow devices */
	}
	footer {
	  padding: 30px 0;
	}

	/*
	 * Off Canvas
	 * --------------------------------------------------
	 */
	@media screen and (max-width: 767px) {
	  .row-offcanvas {
		position: relative;
		-webkit-transition: all .25s ease-out;
			 -o-transition: all .25s ease-out;
				transition: all .25s ease-out;
	  }

	  .sidebar-offcanvas {
		position: absolute;
		width: 60%; /* 6 columns */
		display: none;
	  }

	  .row-offcanvas-right {
		right: 0;
	  }

	  .row-offcanvas-right.active
	  .sidebar-offcanvas {
		display: block;  
		right: 0;
		top: 0;
		z-index: 1;
	  }
	  .row-offcanvas-right.active {

	  }
	}
</style>

    <div class="container-fluid" style="float: left; margin-top: 5%">
        <div class="sidebar-offcanvas" id="sidebar">
          <iv class="list-group">
           <?php 
				include("C:/xampp/htdocs/lap_trinh_quep/php/process/menu_left.php");
				foreach($lop1 as $value){
					echo "<a class='list-group-item' href='../../php/views/monhoc.php?".$value["ID"]."'>".$value["ten_lop"]."</a>";
					
					}
			?>
          </div>
        </div><!--/.sidebar-offcanvas-->


    </div><!--/.container-->
    <script>
$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});
</script>