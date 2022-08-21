<?php
include('../../config/config.php');

$tenloaids = $_POST['tenloaidisan'];

if(isset($_POST['themloaidisan'])){
	//them
	$sql_them = "INSERT INTO tbl_loaids(tendanhmuc) VALUE('".$tenloaids."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlloaids&query=them');
}elseif(isset($_POST['sualoaidisan'])){
	//sua
	$sql_update = "UPDATE tbl_loaids SET tendanhmuc='".$tenloaids."'WHERE id_danhmuc='$_GET[iddanhmuc]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlloaids&query=them');
}else{

	$id=$_GET['iddanhmuc'];
	$sql_xoa = "DELETE FROM tbl_loaids WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlloaids&query=them');
}

?>