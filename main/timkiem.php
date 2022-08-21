<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_disan WHERE tbl_disan.tendisan  LIKE '%".$tukhoa."%' or tbl_disan.ngaycongnhan  LIKE '%".$tukhoa."%'  "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div class="tieude">
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3></div>
				 <div class="row">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					} 
					?>
</div>