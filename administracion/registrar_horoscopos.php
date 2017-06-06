<?php
	include("includes/conexion.php");


	$codigo_horoscopos = $_POST['codigo_horoscopos'];
	$nombre_horoscopos = $_POST['nombre_horoscopos'];
	$fecha_1 = $_POST['fecha_1'];
	$fecha_2 = $_POST['fecha_2'];
	$foto=$_FILES["imagen_horoscopo"]["name"];
	$ruta=$_FILES["imagen_horoscopo"]["tmp_name"];
	$destino="images/".$foto;
	copy($ruta,$destino);

	if ($result = $mysqli->query("INSERT INTO horoscopos VALUES ('".$codigo_horoscopos."','".$nombre_horoscopos."','".$fecha_1."','".$fecha_2."','".$destino."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error:".$mysqli->error;
	}

?>