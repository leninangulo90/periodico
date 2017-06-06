<?php
	$mysqli = new mysqli("localhost","root","","periodico_proyecto"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Error en la conexión : ', mysqli_connect_error();
		exit();
	}
	
?>