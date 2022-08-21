<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>


<div class =" dropdowm_menu">
	<nav class = "container">
    <ul id="dropmenu">
        <li><a href="index.php"> TRANG CHỦ</a></li>
        <li><a href="index.php?quanly=gioithieu">GIỚI THIỆU</a></li>
		<li><a href="index.php?quanly=loc">LỌC</a>
        <li><a href="#">LOẠI DI SẢN</a>
			<ul class="menucon"> 
				<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_loaids ORDER BY id_danhmuc ASC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=loaidisan&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
					<?php

					} 
					?>
				
				
				
			</ul>
	
		</li>
        <li><a href="#">CẤP</a>

			<ul class="menucon"> 
				<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_cap ORDER BY id_cap ASC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmuccap&id=<?php echo $row['id_cap'] ?>"><?php echo $row['tencap'] ?></a></li>
					<?php

					} 
					?>
			</ul>

		</li>
		
		 
        
		
    
	<div class="timkiem">
			
				<form class="form-inline my-4 my-lg-0" action="index.php?quanly=timkiem" method="POST">
					<input type="text" class="form-control mr-sm-2" placeholder="Tìm kiếm địa điểm di sản.." name="tukhoa">
					
					<input type="submit" name="timkiem" class="btn btn-primary btn-sm" value="Tìm kiếm">

					
				</form>
		
	</div>
	</ul>
	<nav>
</div>


 



