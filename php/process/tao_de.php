<?php
require("../model/CauHoi.php");
require("../model/DapAn.php");
require("../model/cauhoi_dapan.php");
		$cau_hoi = new CauHoi();
		$dap_an = new DapAn();
		$cauhoi_dapan = new CauHoi_DapAn();

		//get cau hoi
		$ch_de = $cau_hoi->getCauHoi(1, 0);
		$ch_tb = $cau_hoi->getCauHoi(1, 1);
		$ch_kh = $cau_hoi->getCauHoi(1, 2);
		$all_cau_hoi = array_merge($ch_de, $ch_tb, $ch_kh);
		shuffle($all_cau_hoi);

		echo "<ol type='1'>";
		foreach ($all_cau_hoi as $value) {
			$dap_an_sai = $dap_an->getDapAn($value["ID"],"sai");
			$dap_an_dung = $dap_an->getDapAn($value["ID"],"dung");
			$tron_dap_an = array_merge($dap_an_sai, $dap_an_dung);
			shuffle($tron_dap_an);
			echo "
					<li>
						<thead>
						    	<tr>
						    		<th colspan='6' style='color: #808080'>".$value["noi_dung"]."</th>
						    	</tr>
						</thead>";
				
						echo "<ol type='A'>";
						foreach ($tron_dap_an as $value_1) {
							echo "
								<li style=''>".$value_1["noi_dung"]."</li>";
								
						}
						echo "</ol>";
					echo "</li>";
				
		}
			echo "</ol>";
?>
<center>XUAT FILE[<a href="http://localhost/lap_trinh_quep/TCPDF-master/examples/example_016.php" title="PDF [new window]" target="_blank">PDF</a>]</center>