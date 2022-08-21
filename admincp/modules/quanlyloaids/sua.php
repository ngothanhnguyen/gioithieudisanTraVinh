<?php
	$sql_sua_loaids = "SELECT * FROM tbl_loaids WHERE id_danhmuc='$_GET[iddanhmuc]'LIMIT 1";
	$query_sua_loaids = mysqli_query($mysqli,$sql_sua_loaids);
?>
<center><h2>Sửa loại di sản</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlyloaids/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_loaids)) {
 	?>
	  <tr>
	  	<td>Tên loại di sản</td>
	  	<td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tenloaidisan"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="sualoaidisan" value="Sửa loại di sản"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>