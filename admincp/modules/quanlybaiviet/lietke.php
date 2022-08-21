<?php
	$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_disan WHERE tbl_baiviet.id_disan=tbl_disan.id_disan ORDER BY tbl_baiviet.id DESC";
	$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<center><h2>Liệt kê bài viết</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên bài viết</th>
    <th>Ngày đăng</th>
    <th>Di sản</th>
   
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_bv)){
  	$i++;
  ?>
  <tr height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><?php echo $row['ngaydang'] ?></td>
	<td><?php echo $row['tendisan'] ?></td>
   
   	<td>
   		<a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=qlbaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>