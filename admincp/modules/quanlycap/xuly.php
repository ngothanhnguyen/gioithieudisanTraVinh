<?php
include('../../config/config.php');

$tencapds = $_POST['tencapdisan'];

if(isset($_POST['themcapdisan'])){
	//them
	$sql_them = "INSERT INTO tbl_cap(tencap) VALUE('".$tencapds."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlcapds&query=them');
}elseif(isset($_POST['suacapdisan'])){
	//sua
	$sql_update = "UPDATE tbl_cap SET tencap='".$tencapds."'WHERE id_cap='$_GET[idcap]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlcapds&query=them');
}else{

	$id=$_GET['idcap'];
	$sql_xoa = "DELETE FROM tbl_cap WHERE id_cap='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlcapds&query=them');
}

?>