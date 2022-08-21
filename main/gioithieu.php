<?php
	$sql_gt = "SELECT * FROM tbl_gioithieu";
	$query_gt = mysqli_query($mysqli,$sql_gt);
	$query_gt_all = mysqli_query($mysqli,$sql_gt);
	
	$row_gt_title = mysqli_fetch_array($query_gt);
?>


         <div class="row">
			 <?php
					while($row_gt = mysqli_fetch_array($query_gt_all)){ 
					?>
				
			         <div class="col-lg-12 welcome-left">
			 <p style="margin:10px" class="title_product"><?php echo $row_gt['noidung'] ?></p>
					</div>
					<?php
					} 
					?>
				
					
					
				
			</div><br>


				
					
						
					
				</ul>