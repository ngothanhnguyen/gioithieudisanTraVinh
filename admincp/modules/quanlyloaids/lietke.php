<?php
	$sql_lietke_loaids = "SELECT * FROM tbl_loaids  ";
	$query_lietke_loaids = mysqli_query($mysqli,$sql_lietke_loaids);
?>
<center><h2>Liệt kê loại di sản</h2></center>

<table style="width:100%"  border="1" style="border-collapse: collapse;">
  <tr bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên loại di sản</th>
      <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_loaids)){$i++;
  ?>
  <tr height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
   	<td>
   		<a href="modules/quanlyloaids/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=qlloaids&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>