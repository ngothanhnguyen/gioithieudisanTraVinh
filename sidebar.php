<div class="sidebar">
			<table width="100%">
				<tr class="tieude" >
					<td style="text-transform: uppercase;" >
						Địa điểm di sản
					</td>
				</tr>
					<tr>
						<td>
						<ul class="listsidebar">
				
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_diadiem ORDER BY id_diadiem ASC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucdiadiem&id=<?php echo $row['id_diadiem'] ?>"><?php echo $row['tendiadiem'] ?></a></li>
					<?php

					} 
					?>
						</ul>
					</td>
				</tr>
				
				
				<tr class="tieude" >
					<td style="text-transform: uppercase;">
						Loại hình di tích
					</td>
				</tr>
					<tr>
						<td>
						<ul class="listsidebar">
				
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_lhdt ORDER BY id_lhdt ASC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmuclhdt&id=<?php echo $row['id_lhdt'] ?>"><?php echo $row['tenlhdt'] ?></a></li>
					<?php

					} 
					?>
						</ul>
					</td>
				</tr>
				<tr >
				<td>
					<?php
					$sl1="update counter set cnt=cnt+1";
					mysqli_query($mysqli,$sl1);
					$sl2="select * from counter";
					$kq=mysqli_query($mysqli,$sl2);
					$d=mysqli_fetch_array($kq);
					
					$chuoi=str_pad($d['cnt'],5,"0",STR_PAD_LEFT);
					
					$luottruycap="";
					
					for($i=0;$i<strlen($chuoi);$i++){
						$tam=substr($chuoi,$i,1);
						
						$luottruycap.="<img src='image/$tam.png'/>";
					}
					
					?>
					<div class="tieude" >LƯỢT TRUY CẬP:</div> <?php echo $luottruycap;?>
				</td>
				</tr>
				
				
				
				
				
				
				
				
				
	</table>
           
    	
			
		
				
            	
</div>



			
				
