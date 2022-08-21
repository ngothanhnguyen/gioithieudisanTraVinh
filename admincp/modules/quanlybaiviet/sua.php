<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<br>
<h2 align="center">Sửa bài viết</h2>
<br>

<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_bv)) {
?>
 <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" size="50" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
	  </tr>
	 
	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea></td>
	  </tr>
	  <tr>
	    <td>Di sản</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_disan ORDER BY id_disan DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

	    			if($row_danhmuc['id_disan']==$row['id_disan']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_disan'] ?>"><?php echo $row_danhmuc['tendisan'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_disan'] ?>"><?php echo $row_danhmuc['tendisan'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>