<?php
	include("html/component/header.html");
	include("html/component/menu.html")
?>
<div id="content">
	<div id="user">
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:blue"> <img src="image/icon_admin.png">
      					Lê Hải Triều
   					 </button>
    				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      					<a class="dropdown-item" href="#">đăng xuất</a>
    				</div>
  				</div>
			</div>
	</div>
		<div id="noidung">
			<div id="content-left">
				<table class="table table-bordered">
				  <tbody>
				    <tr>
				      <th scope="row"><a href="#" style="color: blue"><img src="image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				    <tr>
				      <th scope="row"><a href="#" style="color: blue"><img src="image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				    <tr>
				      <th scope="row"><a href="#" style="color: blue"><img src="image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div id="content-right">
				<center class="tieude" style="color: blue"><b><img src="image/iocn_class.png"> Kỹ Thuật Phần Mềm </b></center>
				<span class="kengang"></span>
				<form action="/action_page.php" class="chon">
					<div>
						<label for="">Chọn môn:</label>
						<select name="cars" class="form-control" style="width: 300px">
					      <option selected>Chọn môn</option>
					      <option value="volvo">Cấu trúc dữ liệu và giải thuật</option>
					      <option value="fiat">Lập trình web</option>
					      <option value="audi">Cơ sở dữ liệu</option>
					    </select>
					</div>
					<div>
						<label for="">Nhập số câu hỏi:</label>
						<input type="" name="" class="form-control" style="width: 300px" style="background-color: EEEEEE " />
					</div>
					<div>
						<label for="">Nhập câu hỏi khó:</label>
						<input type="" name=""class="form-control" style="width: 300px"/>
					</div>
					<button type="button" class="btn">Tạo đề</button>
					
				</form>
			</div>
		</div>
</div>
<?php
	include("html/component/footer.html");
?>