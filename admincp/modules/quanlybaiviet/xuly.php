<?php
include('../../config/config.php');
require('../../../carbon/autoload.php');
	

	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
$now = Carbon::now('Asia/Ho_Chi_Minh');
$tenbaiviet = $_POST['tenbaiviet'];




$noidung = $_POST['noidung'];

$disan = $_POST['danhmuc'];


if(isset($_POST['thembaiviet'])){
	//them
	$sql_them = "INSERT INTO tbl_baiviet(tenbaiviet,ngaydang,noidung,id_disan) VALUE('".$tenbaiviet."','".$now."','".$noidung."','".$disan."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlbaiviet&query=them');
}
elseif(isset($_POST['suabaiviet'])){
	
		$sql_update = "UPDATE tbl_baiviet SET tenbaiviet='".$tenbaiviet."',ngaydang='".$now."',noidung='".$noidung."',id_disan='".$disan."' WHERE id='$_GET[idbaiviet]'";

	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlbaiviet&query=them');

}else{
	$id=$_GET['idbaiviet'];
	$sql_xoa = "DELETE FROM tbl_baiviet WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlbaiviet&query=them');
}

?>