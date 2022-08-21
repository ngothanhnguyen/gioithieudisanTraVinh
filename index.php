<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web di sản </title>
	<link rel="stylesheet" href="style.css"/>
     <link rel="stylesheet" href="menu.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" href="wapper.css"/>


</head>

<body>
	<div class="wapper">
		<?php
			session_start();
			include("admincp/config/config.php");
			 include("menu.php");
			include("header.php");
		    include("marquee.php");
		    
		    include("main.php");
			
		   include("footer.php");
		?>
		
		
	    
		
	   
		
		
	</div>
</body>
</html>