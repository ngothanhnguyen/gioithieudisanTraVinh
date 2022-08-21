<?php
include('../../config/config.php');

$tendiadiem = $_POST['tendiadiemdisan'];

if(isset($_POST['themdiadiemdisan'])){
	//them
	$sql_them = "INSERT INTO tbl_diadiem(tendiadiem) VALUE('".$tendiadiem."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qldiadiem&query=them');
}elseif(isset($_POST['suadiadiemdisan'])){
	//sua
	$sql_update = "UPDATE tbl_diadiem SET tendiadiem='".$tendiadiem."'WHERE id_diadiem='$_GET[iddiadiem]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qldiadiem&query=them');
}else{

	$id=$_GET['iddiadiem'];
	$sql_xoa = "DELETE FROM tbl_diadiem WHERE id_diadiem='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qldiadiem&query=them');
}

?>