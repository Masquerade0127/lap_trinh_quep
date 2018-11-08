<?php
	include("../../html/component/header.html");
	include("../../html/component/menu.html")
?>
<div id="content">
	<div id="user">
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  				<div class="btn-group" role="group">
    				<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:blue"> <img src="../../image/icon_admin.png">
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
				      <th scope="row"><a href="#" style="color: blue"><img src="../../image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				    <tr>
				      <th scope="row"><a href="#" style="color: blue"><img src="../../image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				    <tr>
				      <th scope="row"><a href="#" style="color: blue"><img src="../../image/iocn_class.png"> Kỹ Thuật Phần Mềm</a></th>
				    </tr>
				  </tbody>
				</table>
			</div>
			<div id="content-right">
				<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col" style="color: #808080">ID</th>
				      <th scope="col" style="color: #808080">MÃ NGÀNH</th>
				      <th scope="col" style="color: #808080">TÊN NGÀNH</th>
				      <th scope="col" style="color: #808080">TÊN MÔN</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row" style="color: #808080">123</th>
				      <td style="color: #808080">123456</td>
				      <td style="color: #808080">KTPM</td>
				      <td style="color: #808080">
				      	<select name="cars" class="form-control" style="width: 150px">
					      <option selected>Chọn môn</option>
					      <option value="volvo">Cấu trúc dữ liệu và giải thuật</option>
					      <option value="fiat">Lập trình web</option>
					      <option value="audi">Cơ sở dữ liệu</option>
					    </select>
				      </td>
				      <th scope="col">
				      	<button type="button" class="btn" style="margin-left:10px ">Tạo câu hỏi</button>
				      	<button type="button" class="btn" style="margin-left:10px ">Tạo đề</button>
				      </th>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
</div>
<?php
	include("../../html/component/footer.html");
?>