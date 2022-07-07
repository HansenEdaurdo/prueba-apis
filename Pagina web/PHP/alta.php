<?php
	include('connection.php');
	$con=conexion();

	$user=$_POST['name'];
	$nombre=$_POST['user'];
	$email=$_POST['email'];
	$tel=$_POST['mobile'];
	$password=$_POST['pass'];

	$sql="INSERT INTO usuarios VALUES (null,'$user','$nombre','$email','$tel','$password')";

	$consulta=mysqli_query($con,$sql);

		$arreglo=mysqli_fetch_array($consulta);
	    header('location:../PHP/principal.php');
?>