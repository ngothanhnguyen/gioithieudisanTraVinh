<?php
	$sql_lietke_capds = "SELECT * FROM tbl_cap  ";
	$query_lietke_capds = mysqli_query($mysqli,$sql_lietke_capds);
?>
<center><h2>Liệt kê cấp di sản</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr  bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên cấp di sản</th>
      <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_capds)){$i++;
  ?>
  <tr height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tencap'] ?></td>
   	<td>
   		<a href="modules/quanlycap/xuly.php?idcap=<?php echo $row['id_cap'] ?>">Xoá</a> | <a href="?action=qlcapds&query=sua&idcap=<?php echo $row['id_cap'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>