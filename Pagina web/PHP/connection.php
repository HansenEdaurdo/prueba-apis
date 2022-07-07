<?php
   function conexion(){
	   $user="root";
	   $host="localhost";
	   $pass="";
	   $bd="tecnologia";
	   $conn=mysqli_connect ($host,$user,$pass);
	   mysqli_select_db($conn,$bd);
	   return $conn;
   }
?>