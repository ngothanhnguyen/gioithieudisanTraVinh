
<?php
	if(isset($_POST['loc'])){
$cap = $_POST['cap'];
$diadiem = $_POST['diadiem'];
$danhmuc = $_POST['danhmuc'];
$lhdt = $_POST['lhdt'];
		}
?>
<?php
		if ($cap !=""&&$diadiem !=""&&$lhdt==""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and tbl_diadiem.id_diadiem='".$diadiem."' or tbl_loaids.id_danhmuc='".$danhmuc."' or  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap !=""&&$diadiem ==""&&$lhdt==""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and  tbl_loaids.id_danhmuc='".$danhmuc."' "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap !=""&&$diadiem ==""&&$lhdt!=""&&$danhmuc=="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and  tbl_lhdt.id_lhdt='".$lhdt."' "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem !=""&&$lhdt!=""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_diadiem.id_diadiem='".$diadiem."' and  tbl_lhdt.id_lhdt='".$lhdt."' "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem !=""&&$lhdt==""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_diadiem.id_diadiem='".$diadiem."' and  tbl_loaids.id_danhmuc='".$danhmuc."' "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem ==""&&$lhdt!=""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_lhdt.id_lhdt='".$lhdt."' and  tbl_loaids.id_danhmuc='".$danhmuc."' "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>


	
	
	
	<?php
		if ($cap ==""&&$diadiem !=""&&$lhdt!=""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_diadiem.id_diadiem='".$diadiem."' and tbl_loaids.id_danhmuc='".$danhmuc."' and  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap !=""&&$diadiem ==""&&$lhdt!=""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and  tbl_loaids.id_danhmuc='".$danhmuc."'  and  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap !=""&&$diadiem !=""&&$lhdt!=""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and tbl_diadiem.id_diadiem='".$diadiem."' and  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>

	<?php
		if ($cap !=""&&$diadiem !=""&&$lhdt==""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and tbl_diadiem.id_diadiem='".$diadiem."' and tbl_loaids.id_danhmuc='".$danhmuc."'   "  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	
	
	<?php
		if ($cap !=""&&$diadiem !=""&&$lhdt!=""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."' and tbl_diadiem.id_diadiem='".$diadiem."' and tbl_loaids.id_danhmuc='".$danhmuc."' and  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap !=""&&$diadiem ==""&&$lhdt==""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE tbl_cap.id_cap='".$cap."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem !=""&&$lhdt==""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE  tbl_diadiem.id_diadiem='".$diadiem."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem ==""&&$lhdt!=""&&$danhmuc =="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE  tbl_lhdt.id_lhdt='".$lhdt."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	<?php
		if ($cap ==""&&$diadiem ==""&&$lhdt==""&&$danhmuc !="")
		{
		?>
		<?php
	$sql_pro = "SELECT * FROM tbl_disan
    INNER JOIN tbl_cap ON  tbl_disan.id_cap=tbl_cap.id_cap
    INNER JOIN tbl_diadiem ON tbl_disan.id_diadiem=tbl_diadiem.id_diadiem
	INNER JOIN tbl_lhdt ON tbl_disan.id_lhdt=tbl_lhdt.id_lhdt
	INNER JOIN tbl_loaids  ON tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc
	WHERE  tbl_loaids.id_danhmuc='".$danhmuc."'"  ;
	$query_pro = mysqli_query($mysqli,$sql_pro);
		?>
		
<div class="row">
					<?php
						
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=disan&id=<?php echo $row['id_disan'] ?>">
							<img class="img img-responsive" width="200px" height="130px" src="admincp/modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên di sản : <?php echo $row['tendisan'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tencap'] ?></p>
							<p style="text-align: center;color:#000000"><?php echo $row['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row['diachids'] ?></p>
							
						</a>
					</div>
					<?php
					
					} 
					?>
	


		<?php
	}
	?>
	
	
	
	
	
	
	
	