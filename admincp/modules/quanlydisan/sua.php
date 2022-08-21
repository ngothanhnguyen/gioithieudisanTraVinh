<?php
	$sql_sua_ds = "SELECT * FROM tbl_disan WHERE id_disan='$_GET[idds]' LIMIT 1";
	$query_sua_ds= mysqli_query($mysqli,$sql_sua_ds);
?>
<center><h2>Sửa di sản</h2></center>
<table border="1" width="100%"  bgcolor="#B9D2F1" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_ds)) {
?>
 <form method="POST" action="modules/quanlydisan/xuly.php?idds=<?php echo $row['id_disan'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td align="center">Tên di sản</td>
		  <td><textarea rows="10"   name="tendisan" style="resize: none"><?php echo $row['tendisan'] ?></textarea></td>
	  
	  </tr>
	   <tr>
	  	<td align="center">Ngày công  nhận</td>
	  	<td><input size="50" type="text" value="<?php echo $row['ngaycongnhan'] ?>" name="ngaycongnhan"></td>
	  </tr>
	  <tr>
	  	<td align="center">Địa chỉ</td>
		  
	  	<td><textarea rows="10"  name="diachids" style="resize: none"><?php echo $row['diachids'] ?></textarea></td>
	 </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	    <td align="center">Cấp: </td>
	    <td>
	    	<select name="cap">
	    		<?php
	    		$sql_cap = "SELECT * FROM tbl_cap ORDER BY id_cap DESC";
	    		$query_cap = mysqli_query($mysqli,$sql_cap);
	    		while($row_cap = mysqli_fetch_array($query_cap)){
	    			if($row_cap['id_cap']==$row['id_cap']){
	    		?>
	    		<option selected value="<?php echo $row_cap['id_cap'] ?>"><?php echo $row_cap['tencap'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_cap['id_cap'] ?>"><?php echo $row_cap['tencap'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 <tr>
	    <td align="center">Địa điểm</td>
	    <td>
	    	<select name="diadiem">
	    		<?php
	    		$sql_diadiem = "SELECT * FROM tbl_diadiem ORDER BY id_diadiem DESC";
	    		$query_diadiem = mysqli_query($mysqli,$sql_diadiem);
	    		while($row_diadiem = mysqli_fetch_array($query_diadiem)){
	    			if($row_diadiem ['id_diadiem']==$row['id_diadiem']){
	    		?>
	    		<option selected value="<?php echo $row_diadiem ['id_diadiem'] ?>"><?php echo $row_diadiem ['tendiadiem'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_diadiem ['id_diadiem'] ?>"><?php echo $row_diadiem ['tendiadiem'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	 
	 <tr>
	    <td align="center">Loại di sản</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_loaids = "SELECT * FROM tbl_loaids ORDER BY id_danhmuc DESC";
	    		$query_loaids = mysqli_query($mysqli,$sql_loaids);
	    		while($row_loaids = mysqli_fetch_array($query_loaids)){
	    			if($row_loaids ['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_loaids ['id_danhmuc'] ?>"><?php echo $row_loaids ['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_loaids ['id_danhmuc'] ?>"><?php echo $row_loaids ['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	 
	 <tr>
	    <td align="center">Loại hình di tích</td>
	    <td>
	    	<select name="lhdt">
	    		<?php
	    		$sql_lhdt = "SELECT * FROM tbl_lhdt ORDER BY id_lhdt DESC";
	    		$query_lhdt = mysqli_query($mysqli,$sql_lhdt);
	    		while($row_lhdt = mysqli_fetch_array($query_lhdt)){
	    			if($row_lhdt ['id_lhdt']==$row['id_lhdt']){
	    		?>
	    		<option selected value="<?php echo $row_lhdt ['id_lhdt'] ?>"><?php echo $row_lhdt ['tenlhdt'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_lhdt ['id_lhdt'] ?>"><?php echo $row_lhdt ['tenlhdt'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suadisan" value="Sửa di sản"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>