<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN DI SẢN </title>
<link rel="stylesheet" type="text/css" href="style/css.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
    
    
</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<body>
	<div class="wrapper">
	<?php
		include("config/config.php");
		include('modules/header.php');
		include('modules/menu.php');
		include('modules/main.php');
		include('modules/footer.php');
	?>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script>
	CKEDITOR.replace('thongtinlienhe');
		CKEDITOR.replace('tendisan');
       CKEDITOR.replace('diachids');
        CKEDITOR.replace('noidung');
    </script>
    
</body>
</html>