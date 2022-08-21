<?php
	$sql_lietke_ddds = "SELECT * FROM tbl_diadiem  ";
	$query_lietke_ddds = mysqli_query($mysqli,$sql_lietke_ddds);
?>
<center><h2>Liệt kê địa điểm di sản</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên địa điểm di sản</th>
      <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_ddds)){$i++;
  ?>
  <tr height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendiadiem'] ?></td>
   	<td>
   		<a href="modules/quanlydiadiem/xuly.php?iddiadiem=<?php echo $row['id_diadiem'] ?>">Xoá</a> | <a href="?action=qldiadiem&query=sua&iddiadiem=<?php echo $row['id_diadiem'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>