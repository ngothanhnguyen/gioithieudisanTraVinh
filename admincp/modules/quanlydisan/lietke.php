


<?php
	$sql_lietke_ds = "SELECT * FROM tbl_disan,tbl_cap,tbl_diadiem, tbl_lhdt,tbl_loaids WHERE tbl_disan.id_cap=tbl_cap.id_cap and tbl_disan.id_diadiem=tbl_diadiem.id_diadiem and tbl_disan.id_lhdt=tbl_lhdt.id_lhdt and tbl_disan.id_danhmuc =tbl_loaids.id_danhmuc ORDER BY id_disan DESC";
	$query_lietke_ds = mysqli_query($mysqli,$sql_lietke_ds);
?>
<center><h2>Liệt kê di sản</h2></center>

<table  style="width:100%" border="1" style="border-collapse: collapse;">
  <tr bgcolor="#84B4C8" height="50px" align="center">
  	<th>Id</th>
    <th>Tên di sản</th>
    <th>Hình ảnh</th>
    <th>Ngày công nhận</th>
    <th>Địa chỉ</th>
    <th>Cấp</th>
	<th>Địa Điểm</th>
    <th>Danh mục</th>
	  <th>Loại hình di tích</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_ds)){
  	$i++;
  ?>
  <tr height="40px" align="center">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendisan'] ?></td>
    <td><img src="modules/quanlydisan/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['ngaycongnhan'] ?></td>
    <td><?php echo $row['diachids'] ?></td>
    <td><?php echo $row['tencap'] ?></td>
	<td><?php echo $row['tendiadiem'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['tenlhdt'] ?></td>
      
   
   	<td>
   		<a href="modules/quanlydisan/xuly.php?idds=<?php echo $row['id_disan'] ?>">Xoá</a> | <a href="?action=qlds&query=sua&idds=<?php echo $row['id_disan'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>




