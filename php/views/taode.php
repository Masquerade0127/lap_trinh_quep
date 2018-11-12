<?php
	include("../../html/component/header.html");
	include("../../html/component/menu.html")
?>
<link rel="stylesheet" type="text/css" href="../../css/taocauhoi.css">
<div id="content"style="height: 700px">
	<div id="user" class="col-12">
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="margin-top: 1%;text-align: right;border-radius: 10px">
  				<div class="file-attachment-group" style="background-color: white;height: 60px;width: 100%">
					<p><img style="width: 100%;height: 100%" src="../../image/icon_admin.png" /></p>
    				<select name="cars" class="form-control" style="color:blue;width:100%"> 
      					<option>Lê Hải Triều</option>
      					<option>Đăng xuất</option>
      					<option>Tài khoản khác</option>
   					 </select>
  				</div>
  			</div>
	</div>
	<div id="noidung" style="display: inline;">
		<div class="col-3" id="menu_left">
			
		</div>
		<div class="col-8" id="menu_right"">
			<div class="form-create-question-wrapper" style="margin-top: 5%">
					<center class="tieude" style="color: blue"><b><img src="../../image/iocn_class.png"> Kỹ Thuật Phần Mềm </b></center>
				<span class="kengang" style="width: 100%; height: 2px; background-color: #808080;display: inline-block;"></span>
				<form action="/action_page.php" class="chon">
					<div>
						<label for="">Chọn môn:</label>
						<select name="cars" class="form-control" style="width: 70%">
					      <option selected>Chọn môn</option>
					      <option value="volvo">Cấu trúc dữ liệu và giải thuật</option>
					      <option value="fiat">Lập trình web</option>
					      <option value="audi">Cơ sở dữ liệu</option>
					    </select>
					</div>
					<div>
						<label  for="">Nhập số câu hỏi dễ:</label>
						<input id="OpenMess" name="chde" class="form-control" style="width: 70%"/>
						<label id="Message">Số lượng câu hỏi phải là số và lớn hơn 0</label>
					</div>
					<div style="clear: both">
						<label for="">Nhập số câu hỏi trung bình:</label>
						<input id="OpenMess2" name="" class="form-control" style="width: 70%"/>
						<label id="Message2" s>Số lượng câu hỏi phải là số và lớn hơn 0</label>
					</div>
					<div style="clear: both">
						<label for="">Nhập số câu hỏi khó:</label>
						<input id="OpenMess3" name="" class="form-control" style="width: 70%"/>
						<label id="Message3">Số lượng câu hỏi phải là số và lớn hơn 0</label>
					</div>
					<button id="An_nut" type="button" class="btn" style="margin-left:30%; margin-top: 5%;margin-bottom: 2%">Tạo đề</button>
					
				</form>

			</div>

		</div>
	</div>		
</div>
<script src="../../js/taode.js"></script>
<?php
	include("../../html/component/footer.html")
?>


	           
	            
	        