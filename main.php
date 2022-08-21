<div class="main">
						<?php
			include("sidebar.php")
		?>
					
					<div class="maincontent">
						<?php
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}else {
					$tam='';
				} 
				if($tam=='danhmucdiadiem'){
					include("main/danhmucdiadiem.php");
				}elseif($tam=='chamsocdats'){
					include("main/danhmuctonerserum.php");
				}elseif($tam=='disan'){
					include("main/disan.php");
				}elseif($tam=='loaidisan'){
					include("main/loaidisan.php");
				}
					elseif($tam=='danhmuclhdt'){
					include("main/lhdt.php");
				}
					elseif($tam=='danhmuccap'){
					include("main/cap.php");
				}elseif($tam=='capquocgia'){
					include("main/capquocgia.php");		
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='gioithieu'){
					include("main/gioithieu.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='loc'){
					include("main/loc.php");
				
				}elseif($tam=='xulyloc'){
					include("main/xulyloc.php");
				}elseif($tam=='baiviet'){
					include("main/baiviet.php");
				}
				elseif($tam=='thongtinthanhtoan'){
				include("main/thongtinthanhtoan.php");
				}
	
				elseif($tam=='donhangdadat'){
					include("main/lichsudonhang.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}elseif($tam=='lichsudonhang'){
					include("main/lichsudonhang.php");
				}elseif($tam=='xemdonhang'){
					include("main/xemdonhang.php");
				}elseif($tam=='tintuc'){
					include("main/tintuc.php");
				}
				else{
					include("main/index.php");
				}
			
		?>
	</div>
	
	
</div>