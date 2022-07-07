<?php
	include('connection.php');
	$con=conexion();
	session_start();

	$email=$_POST['email'];
	$pwd=$_POST['passw'];

	$sql="select * from usuarios where correo='$email' and password='$pwd'";
	$consulta=mysqli_query($con,$sql);
	if(mysqli_num_rows($consulta)>0){
		$arreglo=mysqli_fetch_array($consulta);
		$_SESSION['nom']=$arreglo['usuario'];
	    header('location:principal.php');
	}else{
	    echo '<script type="text/javascript">
	           alert("Error. Correo y/o Contraseña Incorrectos");
	           window.location.href="../HTML/login.html";
	           </script>';
	}
?>