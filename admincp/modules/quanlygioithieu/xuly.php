<?php
include('../../config/config.php');

$tengioithieu = $_POST['tengioithieu'];
$noidung = $_POST['noidung'];
if(isset($_POST['themgioithieu'])){
	//them
	$sql_them = "INSERT INTO tbl_gioithieu(tengioithieu,noidung) VALUE('".$tengioithieu."','".$noidung."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlgt&query=them');
}elseif(isset($_POST['suagioithieu'])){
	//sua
	$sql_update = "UPDATE tbl_gioithieu SET tengioithieu='".$tengioithieu."',noidung='".$noidung."' WHERE idgioithieu='$_GET[idgt]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlgt&query=them');
}else{

	$id=$_GET['idgt'];
	$sql_xoa = "DELETE FROM tbl_gioithieu WHERE idgioithieu='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlgt&query=them');
}

?>