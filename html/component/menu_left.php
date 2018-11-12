<!--
 <ul class="nav nav-pills flex-column">
  <li class="nav-item" style="">
    <a class="nav-link" href="#">Item 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Item 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Item 3</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Item 4</a>
  </li>
</ul>  -->
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
          <div class="list-group">
            <a href="#" class="list-group-item active">I'm the Sidebar</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
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