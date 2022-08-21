<?php
	$sql_pro = "SELECT * FROM tbl_disan, tbl_cap WHERE tbl_cap.id_cap=tbl_disan.id_cap and  tbl_disan.id_diadiem='$_GET[id]' ORDER BY id_disan ASC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_diadiem WHERE tbl_diadiem.id_diadiem='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<td bgcolor=" #C67677"></td>
<div class="tieude">
Địa điểm: <?php echo $row_title['tendiadiem'] ?>
	</div>
				<div class="row">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p class="tensp">Cấp : <?php echo $row['tencap'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
							
						</a>
					</div>
						
					<?php
					} 
					?>
				</div>



			





