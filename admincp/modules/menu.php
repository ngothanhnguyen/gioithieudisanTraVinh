<div class="menu">
    	<ul>
			<li><a href="index.php?action=qlgt&query=them">Quản lý giới thiệu</a></li>
        	<li><a href="index.php?action=qlloaids&query=them">Quản lý loại di sản</a></li>
            <li><a href="index.php?action=qlcapds&query=them">Quản lý Cấp</a></li>
            <li><a href="index.php?action=qldiadiem&query=them">Quản lý địa điểm</a></li>
           <li><a href="index.php?action=qllhdt&query=them">Quản lý loại hình DT</a></li>
			<li><a href="index.php?action=qlds&query=them">Quản lý di sản</a></li>
	        <li><a href="index.php?action=qlbaiviet&query=them">Quản lý bài viết</a></li>
            
		<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<li><a href="index.php?dangxuat=1" style="background:#000;color:#fff;width:200px;height:40px;" >Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></li>

        </ul>
       
    </div>