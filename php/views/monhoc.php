<?php
	include("../../html/component/header.html");
	include_once("../../html/component/menu.php");
?>

<link rel="stylesheet" type="text/css" href="../../css/taocauhoi.css">
<div id="content"style="height: 1000px">
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
			<?php 
				include("../../html/component/menu_left.php");
			?>
		</div>
		<div class="col-8" id="menu_right">
				
			
			<div class="form-create-question-wrapper" style="margin-top: 5%">
					<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col" style="color: #808080">ID</th>
				      <th scope="col" style="color: #808080">MÃ NGÀNH</th>
				      <!-- <th scope="col" style="color: #808080">TÊN NGÀNH</th> -->
				      <th scope="col" style="color: #808080">TÊN MÔN</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <?php
				  	require("../process/danh_sach_mon.php");	 
				  	foreach ($danh_sach as $value) {
				  		echo "<tbody>
						    <tr>
						      <th scope='row' style='color: #808080' >".$value["ID"]."</th>
						      <td style='color: #808080'>".$value["ma_nganh"]."</td>
						      <td style='color: #808080'>".$value["ten_mon"]."</td>
						      <th scope='col'>
						      	<a href='taocauhoi.php?".$value["ID"]."' ><button type='submit' class='btn' style='margin-left:10px'>Tạo câu hỏi</button></a>
						      	<a href='taode.php?".$value["ID"]."' ><button type='submit' class='btn' style='margin-left:10px '>Tạo đề</button></a>
						      </th>
						    </tr>
						</tbody>";
				  	}
				  ?>
				</table>
			</div>
		</div>
	</div>		
</div>
<?php
	include("../../html/component/footer.html")
?>