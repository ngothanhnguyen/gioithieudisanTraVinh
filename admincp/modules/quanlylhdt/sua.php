<?php
	$sql_sua_lhdt = "SELECT * FROM tbl_lhdt WHERE id_lhdt='$_GET[idlhdt]'LIMIT 1";
	$query_sua_lhdt = mysqli_query($mysqli,$sql_sua_lhdt);
?>
<center><h2>Sửa loại hình di tích</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlylhdt/xuly.php?idlhdt=<?php echo $_GET['idlhdt'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_lhdt)) {
 	?>
	  <tr>
	  	<td>Tên loại hình di tích</td>
	  	<td><input type="text" value="<?php echo $dong['tenlhdt'] ?>" name="tenloaihinhditich"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="sualoaihinhditich" value="Sửa loại hình di tích"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>