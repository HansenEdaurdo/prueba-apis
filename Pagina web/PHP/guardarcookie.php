<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Facturas de libros.com</title>
</head>
<body>
	<?php
	   if(!isset($_COOKIE['tarjeta'])){ ?>
	   	<div>
	   		<script> 
	   			alert("Este sitio web utiliza cookies para mejorar las experiencias");
	   			window.location="preferencias.php"
	   	    </script>
	   	</div>
	 <?php } ?>
	 <?php
	    if(isset($_GET['tarjeta'])){
	    	setcookie('tipotarjeta', $_GET['tarjeta'], time()+86400, '/');
	    }
	?>
</body>
</html>