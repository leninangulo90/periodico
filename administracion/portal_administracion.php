<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
	<script src="swal/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="swal/dist/sweetalert.css">
	
	<script type="text/javascript">
		$(document).ready(function(){

			
			$('#noticias').submit(function(e){
				var file_data = $('#imagen').prop('files')[0];
				var form_data = new FormData($("#noticias")[0]);
				form_data.append('file', file_data);

				var response = $.ajax({
					url:'registrar_noticia.php',
					dataType: 'text',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'POST',
				});
				 response.done(function(data, jqXHR, textStatus, errorThrown) {
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         swal({
         	title: 'Noticia Cargada Correctamente',
         	text: 'Gracias por Registrar',
         	type: 'success',
         	confirmButtonColor: '#DD6B55',
         	confirmButtonText: 'Aceptar',
         	closeOnConfirm: false
         })
         $('#noticias')[0].reset();
        } else {
         alert('Intentar Otra Vez');
         $('#noticias')[0].reset();
        }
       });
       e.preventDefault();
      });

			$('#horoscopos').submit(function(e){
				var file_data = $('#imagen_horoscopo').prop('files')[0];
				var form_data = new FormData($("#horoscopos")[0]);
				form_data.append('file', file_data);

				var response = $.ajax({
					url:'registrar_horoscopos.php',
					dataType: 'text',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'POST',
				});
				 response.done(function(data, jqXHR, textStatus, errorThrown) {
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         swal({
         	title: 'Noticia Cargada Correctamente',
         	text: 'Gracias por Registrar',
         	type: 'success',
         	confirmButtonColor: '#DD6B55',
         	confirmButtonText: 'Aceptar',
         	closeOnConfirm: false
         })
         $('#noticias')[0].reset();
        } else {
         alert('Intentar Otra Vez');
         $('#noticias')[0].reset();
        }
       });
       e.preventDefault();
      });
	}); 
	</script>

</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Panel de Administración<span class="pull-right label label-default">:)</span></h1>
	</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel with-nav-tabs panel-default">
			<div class="panel-heading">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1default" data-toggle="tab">Agregar nueva noticia</a></li>
					<li><a href="#tab2default" data-toggle="tab">Agregar nueva categoria</a></li>
					<li><a href="#tab3default" data-toggle="tab">Agregar nuevo Reportero</a></li>
					<li><a href="#tab4default" data-toggle="tab">Agregar Nota de Horoscopo</a></li>
					<li><a href="#tab5default" data-toggle="tab">Agregar Horoscopo</a></li>
					<li><a href="#tab6default" data-toggle="tab">Agregar Imagen con Evento</a></li>
					<li><a href="#tab7default" data-toggle="tab">Agregar Evento</a></li>
					<li><a href="#tab8default" data-toggle="tab">Agregar Sorteo</a></li>
					<li><a href="#tab9default" data-toggle="tab">Agregar nuevo usuario</a></li>
				</ul>
			</div>
		<div class="panel-body">
			<div class="tab-content">
				<div class="tab-pane fade in active" id="tab1default">
					<div class="well" style="width:800px;">
					<form id="noticias">
					
						<label>Titulo de la Noticia:</label><br>
							<input class="form-control" type="text" name="titulo_noticia" id="titulo_noticia" style="width:500px;"><br>
						<label>Categoria:</label><br>
							<?php
							require('includes/conexion.php');
							$query = "SELECT * FROM categorias";
							$result = $mysqli->query($query);
							?>
							<select class="form-control" style="width:500px;" name="codigo_noticia_categoria" id="codigo_noticia_categoria">
								<?php 
									while ($row=$result->fetch_assoc())
								{		
								?>
								<option value="<?php echo $row['codigo_categoria']; ?>">
								<?php echo $row['titulo_categoria']; ?></option>
								<?php } ?>
							</select><br>
						<label>Texto/Contenido:</label><br>
							<textarea class="form-control" name="texto_noticia" id="texto_noticia" style="width:500px;height:120px;"></textarea><br>
						<label>Reportero:</label><br>
							<?php
							require('includes/conexion.php');
							$query = "SELECT * FROM reporteros";
							$result = $mysqli->query($query);
							?>
						    <select class="form-control" style="width:500px;" name="codigo_noticia_reportero" id="codigo_noticia_reportero">
								<?php
									while($row=$result->fetch_assoc())
								{
								?>	
								<option value="<?php echo $row['codigo_reportero'] ?>"><?php echo $row['nombre_reportero'] ?></option>
								<?php } ?>
							</select><br>
						<label>Fecha de la Publicación</label><br>
							<input type="date" name="fecha_noticia" id="fecha_noticia" class="form-control" style="width:500px;"><br>

						<label>Elegir Imagen para el Factor</label><br>
                  		<input type="file" name="imagen" id="imagen"><br>

						<button class="btn btn-success" type="submit" name="publicar" id="publicar"><span class="glyphicon glyphicon-ok"><b>Publicar</span></b></button>
					</form>
				</div>
			</div>
 

				<div class="tab-pane fade" id="tab2default">
					<div class="well" style="width:800px;">
						<form id="categorias">
							<label>Codigo de Categoria</label><br>
							<input type="text" name="codigo_categoria" id="codigo_categoria" class="form-control" style="width:500px;" required><br>

							<label>Titulo de la Categoría</label><br>
							<input type="text" name="titulo" id="titulo" class="form-control" style="width:500px;" required><br>

							<button class="btn btn-success" type="submit" name="publicar_categoria" id="publicar_categoria"><span class="glyphicon glyphicon-ok"></span><b>Guardar Categoría</b></button>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="tab3default">
					<div class="well" style="width:800px;">
						<form id="reporteros">
							<label>Codigo del Reportero</label><br>
							<input type="text" name="codigo_reportero" id="codigo_reportero" class="form-control" style="width:500px;" required><br>

							<label>Nombre del Reportero</label><br>
							<input type="text" name="nombre_reportero" id="nombre_reportero" class="form-control" style="width:500px;" required><br>

							<label>Email del Reportero</label><br>
							<input type="text" name="email_reportero" id="email_reportero" class="form-control" style="width:500px;" required><br>

							<button class="btn btn-success" type="submit" name="publicar_reportero" id="publicar_reportero"><span class="glyphicon glyphicon-ok"><b>Guardar Reportero</b></span></button>
						</form>						
					</div>
				</div>

				<div class="tab-pane fade" id="tab4default">
					<div class="well" style="width:800px;"> 
						<form id="horoscopos_notas">
							<label>Titulo del Horoscopo</label><br>
							<input type="text" name="titulo_horoscopo" id="titulo_horoscopo" class="form-control" style="width:500px;" required><br>

							<label>Horoscopos:</label><br>
							<?php
							require('includes/conexion.php');
							$query = "SELECT * FROM horoscopos";
							$result = $mysqli->query($query);
							?>
						    <select class="form-control" style="width:500px;" name="codigo_horoscopos_notas" id="codigo_horoscopos_notas">
								<?php
									while($row=$result->fetch_assoc())
								{
								?>	
								<option value="<?php echo $row['codigo_horoscopos'] ?>"><?php echo $row['nombre_horoscopos'] ?></option>
								<?php } ?>
							</select><br>

							<label>Nota del Horoscopo</label>
							<textarea class="form-control" name="texto_horoscopo" id="texto_horoscopo" style="width:500px;height:120px;"></textarea><br>

							<label>Fecha Actual:</label><br>
							<input type="date" name="fecha_horoscopo" id="fecha_horoscopo" style="width:500px;" class="form-control"><br>

							<button class="btn btn-success" type="submit" name="publicar_horoscopo_nota" id="publicar_horoscopo_nota"><span class="glyphicon glyphicon-ok"><b>Guardar Nota del Horoscopo</b></span></button>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="tab5default">
					<div class="well" style="width:800px;">
						<form id="horoscopos">
							<label>Codigo del Horoscopo</label><br>
							<input type="text" name="codigo_horoscopos" id="codigo_horoscopos" class="form-control" style="width:500px;" required><br>

							<label>Nombre del Horoscopo</label><br>
							<input type="text" name="nombre_horoscopos" id="nombre_horoscopos" class="form-control" style="width:500px;" required><br>

							<label>Fecha Inicial</label><br>
							<input type="date" name="fecha_1" id="fecha_1" class="form-control" style="width:500px;" required><br>

							<label>Fecha Final</label><br>
							<input type="date" name="fecha_2" id="fecha_2" class="form-control" style="width:500px;" required><br>

							<label>Elegir Imagen para el Horoscopo</label><br>
                  			<input type="file" name="imagen_horoscopo" id="imagen_horoscopo"><br>

							<button class="btn btn-success" type="submit" name="publicar_horoscopo" id="publicar_horoscopo"><span class="glyphicon glyphicon-ok"><b>Guardar Horoscopo</b></span></button>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="tab6default">
					<div class="well" style="width:800px;">
						<form id="imagen_evento">
							<label>Nombre de la Fotografia</label><br>
							<input type="text" name="nombre_foto" id="nombre_foto" class="form-control" style="width:500px;" required><br>

							<label>Precio de la Fotografia</label><br>
							<input type="text" name="precio_foto" id="precio_foto" class="form-control" style="width:500px;" required><br>

							<label>Texto de la Fotografia</label><br>
							<textarea class="form-control" name="texto_fotografia" id="texto_fotografia" style="width:500px;height:120px;"></textarea><br>

							<label>Titulo de la Fotografia</label><br>
							<input type="text" name="titulo_foto" id="titulo_foto" style="width:500px;" class="form-control" required><br>

							<label>Fecha de la Fotografia</label><br>
							<input type="date" name="fecha_foto" id="fecha_foto" style="width:500px;" class="form-control" required><br>

							<label>Evento</label>
							<select class="form-control" style="width:500px;" name="codigo_evento_1" id="codigo_evento_1">
								<option value="0">Seleccionar Evento</option>
								<option value="1">Sociales</option>
								<option value="2">XV años</option>
								<option value="3">Bodas</option>
								<option value="4">Bautizos</option>
							</select><br>

							<label>Elegir Imagen para el Factor</label><br>
                  			<input type="file" name="foto" id="foto"><br>

                  			<button class="btn btn-success" type="submit" name="publicar_imagen_evento" id="publicar_imagen_evento"><span class="glyphicon glyphicon-ok"><b>Guardar Imagen</b></span></button>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="tab7default">
					<div class="well" style="width:800px;">
						<form id="evento">
							<label>Codigo del Evento:</label>
							<input type="text" name="codigo_evento" id="codigo_evento" class="form-control" style="width:500px;" required><br>

							<label>Evento:</label><br>
							<input type="text" name="evento" id="evento" class="form-control" style="width: 500px;" required><br>

							<button class="btn btn-success" type="submit" name="publicar_evento" id="publicar_evento"><span class="glyphicon glyphicon-ok"><b>Guardar Evento</b></span></button>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="tab8default">
					<div class="well" style="width:800px;">
						<form id="randorm_admin">
							<label>Codigo del Evento</label><br>
							<input type="text" name="codigo_sorteo" id="codigo_sorteo" class="form-control" style="width: 500px;" required><br>

							<label>Nombre del Sorteo</label><br>
							<input type="text" name="nombre_sorteo" id="nombre_sorteo" class="form-control" style="width: 500px" required><br>

							<label>Fecha del Sorteo</label><br>
							<input type="date" name="fecha_sorteo" id="fecha_sorteo" class="form-control" style="width: 500px" required><br>

							<button class="btn btn-success" type="submit" name="publicar_sorteo" id="publicar_sorteo"><span class="glyphicon glyphicon-ok"><b>Guardar Sorteo</b></span></button>
						</form>
					</div>
				</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>