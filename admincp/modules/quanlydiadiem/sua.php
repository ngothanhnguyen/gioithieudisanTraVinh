<?php
	$sql_sua_ddds = "SELECT * FROM tbl_diadiem WHERE id_diadiem='$_GET[iddiadiem]'LIMIT 1";
	$query_sua_ddds = mysqli_query($mysqli,$sql_sua_ddds);
?>
<center><h2>Sửa địa điểm di sản</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlydiadiem/xuly.php?iddiadiem=<?php echo $_GET['iddiadiem'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_ddds)) {
 	?>
	  <tr>
	  	<td>Tên địa điểm di sản</td>
	  	<td><input type="text" value="<?php echo $dong['tendiadiem'] ?>" name="tendiadiemdisan"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suadiadiemdisan" value="Sửa địa điểm di sản"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>