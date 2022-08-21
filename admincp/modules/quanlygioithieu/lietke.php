<?php
	$sql_lietke_gt = "SELECT * FROM tbl_gioithieu  ";
	$query_lietke_gt = mysqli_query($mysqli,$sql_lietke_gt);
?>
<center><h2>Liệt kê phần giới thiệu</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên bài viết phần giới thiệu</th>
	  <th>Nội dung</th>
      <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_gt)){$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tengioithieu'] ?></td>
	 <td><?php echo $row['noidung'] ?></td>
   	<td>
   		<a href="modules/quanlygioithieu/xuly.php?idgt=<?php echo $row['idgioithieu'] ?>">Xoá</a> | <a href="?action=qlgt&query=sua&idgt=<?php echo $row['idgioithieu'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>