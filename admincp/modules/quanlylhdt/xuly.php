<?php
include('../../config/config.php');

$tenlhdt = $_POST['tenloaihinhditich'];

if(isset($_POST['themloaihinhditich'])){
	//them
	$sql_them = "INSERT INTO tbl_lhdt(tenlhdt) VALUE('".$tenlhdt."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qllhdt&query=them');
}elseif(isset($_POST['sualoaihinhditich'])){
	//sua
	$sql_update = "UPDATE tbl_lhdt SET tenlhdt='".$tenlhdt."'WHERE id_lhdt='$_GET[idlhdt]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qllhdt&query=them');
}else{

	$id=$_GET['idlhdt'];
	$sql_xoa = "DELETE FROM tbl_lhdt WHERE id_lhdt='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qllhdt&query=them');
}

?>