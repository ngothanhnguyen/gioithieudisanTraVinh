<?php
	$sql_sua_gt = "SELECT * FROM tbl_gioithieu WHERE idgioithieu='$_GET[idgt]'LIMIT 1";
	$query_sua_gt = mysqli_query($mysqli,$sql_sua_gt);
?>
<center><h2>Sửa phần giới thiệu</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlygioithieu/xuly.php?idgt=<?php echo $_GET['idgt'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_gt)) {
 	?>
	  <tr>
	  	<td>Tên bài viết giới thiệu</td>
	  	<td><input type="text" value="<?php echo $dong['tengioithieu'] ?>" name="tengioithieu"></td>
	  </tr>
	 <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $dong['noidung'] ?></textarea></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suagioithieu" value="Sửa phần giới thiệu"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>