<?php
	include("../../html/component/header.html");
	include("../../html/component/menu.html")
?>
<link rel="stylesheet" type="text/css" href="../../css/taocauhoi.css">
<div id="content" class="col-12">
	<div id="user">
			<div class="btn-group" role="group" aria-label="Button group with nested dropdown" style="margin-top: 1%">
  				<div class="file-attachment-group" style="background-color: white;height: 50px">
					<p><img src="../../image/icon_admin.png" /></p>
    				<select name="cars" class="form-control" style="color:blue;width: 100%"> 
      					<option>Lê Hải Triều</option>
      					<option>Đăng xuất</option>
      					<option>Tài khoản khác</option>
   					 </select>
  				</div>
  			</div>
	</div>
	<div id="noidung">
		<div class="col-3" id="menu_left">
			<ul style="margin-top: 5%" class="col-12">
				<a href="#" style="color: blue"><img src="../../image/icon_class.png"> Kỹ Thuật Phần Mềm</a>
				<hr width="80%" />
				<a href="#" style="color: blue"><img src="../../image/icon_class.png"> Kỹ Thuật Phần Mềm</a>
				<hr width="80%" />
				<a href="#" style="color: blue"><img src="../../image/icon_class.png"> Kỹ Thuật Phần Mềm</a>
			<ul>
		</div>
		<div class="col-8" id="menu_right">
			<div class="form-create-question-wrapper">
					<form action="/action_page.php" id="form-create-question" method="post" enctype="multipart/form-data">
						<h1 style="text-align: center;">TẠO CÂU HỎI<img src="../../image/icon_author.png" alt="icon author"/></h1>
						<b><h3><span style="color: black">CÂU 1</span></h3></b>
							<div class="form-group">
								<div style="color: black">* Nội dung câu hỏi:</div>
								<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Dễ</option>
					    					<option value="volvo">Trung bình</option>
					   						<option value="fiat">Khó</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						</div>
						<b><h3><span>ĐÁP ÁN</span></h3></b>
						<div class="form-group">
							<div><span>Đáp án A<span></div>
							<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div><span>Đáp án B<span></div>
							<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div><span>Đáp án C<span></div>
							<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div><span>Đáp án D<span></div>
							<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div><span>Đáp án E<span></div>
							<div class="content-question-group">
								<div style="justify-content: space-between;width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div><span>Đáp án F<span></div>
							<div class="content-question-group">
								<div style="width: 450px">
									<div class="file-attachment-group">
										<select name="cars" class="form-control" style="width: 100px">
					    					<option selected>Sai</option>
					    					<option value="volvo">Đúng</option>
					   					 </select>
					   			 		<input style="border-radius: 5%;background-color: #0033CC;width: 100%" type="file" class="alert-link" name="image_cau_hoi"></input>
									</div>
								</div>
								<textarea class="form-control" rows="3" id="comment" name="text"></textarea>
							</div>
						</div>
						<div class="button-form-submit">
							<button type="submit" class="btn btn-secondary" style="margin-right: 20px;">
							<img src="../../image/icon_ok.png" alt="icon ok" style=""/>LƯU</button>
							<button type="submit" class="btn btn-secondary">
							<img src="../../image/icon_exit.png" alt="icon link" style=""/>HỦY</button>
						</div>
						<div style="height: 25px"></div>
				  </form>
			</div>
		</div>
	</div>		
</div>

<?php
	include("../../html/component/footer.html");
?>
 

	           
	            
	        