<?php
	$sql_sua_capds = "SELECT * FROM tbl_cap WHERE id_cap='$_GET[idcap]'LIMIT 1";
	$query_sua_capds = mysqli_query($mysqli,$sql_sua_capds);
?>
<center><h2>Sửa cấp di sản</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlycap/xuly.php?idcap=<?php echo $_GET['idcap'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_capds)) {
 	?>
	  <tr>
	  	<td>Tên cấp di sản</td>
	  	<td><input type="text" value="<?php echo $dong['tencap'] ?>" name="tencapdisan"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suacapdisan" value="Sửa cấp di sản"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>