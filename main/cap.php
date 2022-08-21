<?php
if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_pro = "SELECT * FROM tbl_disan WHERE tbl_disan.id_cap='$_GET[id]' ORDER BY id_disan ASC LIMIT $begin,3";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_cap WHERE tbl_cap.id_cap='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>



<td bgcolor=" #C67677"></td>
<div class="tieude">
Cấp di sản: <?php echo $row_title['tencap'] ?>
	</div>
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
<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    margin: 0;
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: burlywood;
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_disan");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/3);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="index.php?quanly=danhmuccap&id=<?php echo $row_title['id_cap'] ?>&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
					
				</ul>


			





