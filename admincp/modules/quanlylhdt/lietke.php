<?php
	$sql_lietke_lhdt = "SELECT * FROM tbl_lhdt  ";
	$query_lietke_lhdt = mysqli_query($mysqli,$sql_lietke_lhdt);
?>
<center><h2>Liệt kê loại hình di tích</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên loại hình di tích</th>
      <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_lhdt)){$i++;
  ?>
  <tr  height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenlhdt'] ?></td>
   	<td>
   		<a href="modules/quanlylhdt/xuly.php?idlhdt=<?php echo $row['id_lhdt'] ?>">Xoá</a> | <a href="?action=qllhdt&query=sua&idlhdt=<?php echo $row['id_lhdt'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>