<div class="clear"></div>
<div class="main">
<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam=$_GET['action'];
					$query = $_GET['query'];
				}else {
					$tam='';
					$query = '';
				} 
				if($tam=='qlloaids' && $query=='them'){
					include("modules/quanlyloaids/them.php");
					include("modules/quanlyloaids/lietke.php");
					
				}elseif ($tam=='qlloaids' && $query=='sua') {
					include("modules/quanlyloaids/sua.php");
					
				}elseif($tam=='qlcapds'&& $query=='them'){
					include("modules/quanlycap/them.php");
					include("modules/quanlycap/lietke.php");
					
				}elseif ($tam=='qlcapds' && $query=='sua') {
					include("modules/quanlycap/sua.php");
					
				}elseif($tam=='qldiadiem'&& $query=='them'){
					include("modules/quanlydiadiem/them.php");
					include("modules/quanlydiadiem/lietke.php");
				}elseif($tam=='qldiadiem' && $query=='sua'){
					include("modules/quanlydiadiem/sua.php");
				}elseif($tam=='qlds' && $query=='them'){
					include("modules/quanlydisan/them.php");
					include("modules/quanlydisan/lietke.php");

				}elseif($tam=='qlds' && $query=='sua'){
					include("modules/quanlydisan/sua.php");

				}elseif($tam=='qlbaiviet' && $query=='them'){
					include("modules/quanlybaiviet/them.php");
					include("modules/quanlybaiviet/lietke.php");
					
				}elseif($tam=='qlbaiviet' && $query=='sua'){
					include("modules/quanlybaiviet/sua.php");	
				}elseif($tam=='qllhdt' && $query=='them'){
					include("modules/quanlylhdt/them.php");
					include("modules/quanlylhdt/lietke.php");
					
				}elseif($tam=='qllhdt' && $query=='sua'){
					include("modules/quanlylhdt/sua.php");
				}elseif($tam=='qlgt' && $query=='them'){
					include("modules/quanlygioithieu/them.php");
					include("modules/quanlygioithieu/lietke.php");
					
				}elseif($tam=='qlgt' && $query=='sua'){
					include("modules/quanlygioithieu/sua.php");
				}elseif($tam=='dktv'){
					include("main/danhkithanhvien.php");
				}else{
					include("modules/welcome.php");
				}
			
		?>
</div>