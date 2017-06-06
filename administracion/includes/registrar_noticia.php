<?php
	include("includes/conexion.php");


	$titulo_noticia = $_POST['titulo_noticia'];
	$codigo_noticia_categoria = $_POST['codigo_noticia_categoria'];
	$texto_noticia = $_POST['texto_noticia'];
	$codigo_noticia_reportero = $_POST['codigo_noticia_reportero'];
	$fecha_noticia = $_POST['fecha_noticia'];
	$foto=$_FILES["imagen"]["name"];
	$ruta=$_FILES["imagen"]["tmp_name"];
	$destino="images/".$foto;
	copy($ruta,$destino);

	if ($result = $mysqli->query("INSERT INTO noticias VALUES ('','".$titulo_noticia."','".$codigo_noticia_categoria."','".$texto_noticia."','".$codigo_noticia_reportero."','".$fecha_noticia."','".$destino."')") === TRUE) {
		echo http_response_code(202);
	} else {
		echo "Error:".$mysqli->error;
	}

?>