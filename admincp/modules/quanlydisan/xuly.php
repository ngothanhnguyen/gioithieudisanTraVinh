<?php
include('../../config/config.php');
$diachids = $_POST['diachids'];
$tendisan = $_POST['tendisan'];
$ngaycongnhan = $_POST['ngaycongnhan'];

//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$cap = $_POST['cap'];
$diadiem = $_POST['diadiem'];
$danhmuc = $_POST['danhmuc'];
$lhdt = $_POST['lhdt'];




if(isset($_POST['themdisan'])){
	//them
	$sql_them = "INSERT INTO tbl_disan(tendisan,ngaycongnhan,diachids,hinhanh,id_cap,id_diadiem,id_danhmuc,id_lhdt) VALUE('".$tendisan."','".$ngaycongnhan."','".$diachids."','".$hinhanh."','".$cap."','".$diadiem."','".$danhmuc."','".$lhdt."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=qlds&query=them');
}elseif(isset($_POST['suadisan'])){
	//sua
	if(!empty($_FILES['hinhanh']['name'])){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_disan SET tendisan='".$tendisan."',ngaycongnhan='".$ngaycongnhan."',diachids='".$diachids."',hinhanh='".$hinhanh."',id_cap='".$cap."',id_diadiem='".$diadiem."',id_danhmuc='".$danhmuc."',id_lhdt='".$lhdt."' WHERE id_disan='$_GET[idds]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_disan WHERE id_disan = '$_GET[idds]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE tbl_disan SET tendisan='".$tendisan."',ngaycongnhan='".$ngaycongnhan."',diachids='".$diachids."',id_cap='".$cap."',id_diadiem='".$diadiem."',id_danhmuc='".$danhmuc."',id_lhdt='".$lhdt."' WHERE id_disan='$_GET[idds]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=qlds&query=them');
}else{
	$id=$_GET['idds'];
	$sql = "SELECT * FROM tbl_disan WHERE id_disan = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_disan WHERE id_disan='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlds&query=them');
}

?>