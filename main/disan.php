
<?php
	$sql_chitiet = "SELECT * FROM tbl_disan,tbl_cap,tbl_diadiem, tbl_lhdt,tbl_loaids WHERE tbl_disan.id_cap=tbl_cap.id_cap and tbl_disan.id_diadiem=tbl_diadiem.id_diadiem and tbl_disan.id_lhdt=tbl_lhdt.id_lhdt and tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc AND  tbl_disan.id_disan='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham" >
		<img width="100%" src="admincp/modules/quanlydisan/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	
	</div>
	
	
		<div class="chitiet_sanpham">
			<p class="tensp">Tên di sản : <?php echo $row_chitiet['tendisan'] ?></p>
							<p style="text-align: center;color:#000000">Loại di sản: <?php echo $row_chitiet['tendanhmuc'] ?></p>
							<p style="text-align: center;color:#000000">Cấp: <?php echo $row_chitiet['tencap'] ?></p>
							<p style="text-align: center;color:#000000">Ngày công nhận: <?php echo $row_chitiet['ngaycongnhan'] ?></p>
							<p style="text-align: center;color:#000000">Loại hình di tích: <?php echo $row_chitiet['tenlhdt'] ?></p>
							<p class="gia">Địa chỉ : <?php echo $row_chitiet['diachids'] ?></p>
<?php
} 
?>
	</div>
	<div class="clear"></div>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_disan='$_GET[id]' ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_disan WHERE tbl_disan.id_disan='$_GET[id]'";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
				<ul class="baiviet">
					<?php
			while($row_bv = mysqli_fetch_array($query_bv)){ 
					?>
					<li>
						<p class="title_product" style="margin:10px"><?php echo $row_bv['noidung'] ?></p>
						<p style="text-align:right;color:#000000">Ngày đăng: <?php echo $row_bv['ngaydang'] ?></p>
					</li>
					<?php
					} 
					?>
					
				</ul>