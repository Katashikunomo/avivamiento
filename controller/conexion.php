<?php
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$servername = "localhost";
	$dbname = "u247480952_aviva";
	$username = "u247480952_avivamiento";
	$password = "naycq=Psi9L@";  
	$mysqli = new mysqli($servername, $username, $password, $dbname); 
// 	$mysqli = new mysqli("localhost","u247480952_avivamiento","[A6pA&9]*U","u247480952_aviva"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>