<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */

		.row.content {
			height: 550px
		}
		/* Set gray background color and 100% height */

		.sidenav {
			background-color: #F5F5F5;
			height: 520%;
			width: 12.2%;
			margin-top: -20px;

		}
		/* On small screens, set height to 'auto' for the grid */

		@media screen and (max-width: 767px) {
			.row.content {
				height: auto;
			}
		}

	</style>

</head>

<body>

	<nav class="navbar navbar-default" role="navigation">
<!-- El logotipo y el icono que despliega el menú se agrupan
	para mostrarlos mejor en los dispositivos móviles -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">EL FISCAL DE COAHUILA</a>
	</div>

<!-- Agrupar los enlaces de navegación, los formularios y cualquier
	otro elemento que se pueda ocultar al minimizar la barra -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<!--  <img style="width:10.9%;" src="../assets/images/nube.jpg">-->
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Saltillo</a></li>
			<li><a href="#">Ramos Arizpe</a></li>
			<li><a href="#">Monclova</a></li>
			<li><a href="#">Acuña</a></li>
			<li><a href="#">Torreon</a></li>
		</ul>
	</div>
</nav>
<!--  <nav class="navbar navbar-inverse navbar-fixed-bottom" style="border-top:2px solid black;">
<p style="margin:15px 0px;color:whitesmoke;font-size:15px;font-family:calibri light; padding:0px 20px;">CEEPS COAHUILA &copy; 2017. Todos los derechos reservados.</p>
</nav> -->

<nav class="navbar navbar-inverse visible-xs">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>     
			</button>

		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="#">Sobre Nosotros</a></li>
				<li><a href="#">Catalogo</a></li>
				<li><a href="#">Comentarios</a></li>
				<li><a href="#">Contactanos</a></li>
			</ul>
		</div>
	</div>
</nav>

<?php
include("horoscopos.php");
?>

<div class="col-sm-10">
	<div id="inicio">
		<div class="panel-heading">
			<header class="section-header text-center">
				<h1 class="section-header_title">Noticias para todos</h1> 

				<div class="rte rte--header">
					"Noticias Para todos, haciendo llegar las noticias hasta cualquier lugar donde te encuentres"
				</div>
				<hr class="hr--small">
			</header>
		</div>

		<div class="panel-body">


			<?php
			require("../includes/conexion.php");
			$id=base64_decode($_GET["id"]);
			mysqli_set_charset($mysqli,"utf8");
			$sql = "SELECT imagen, titulo_noticia,texto_noticia,titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE noticias.codigo_noticia_categoria='$id'";
			$result= $mysqli->query($sql);
			?>
			<div class="container" style="margin-bottom:100px;">
			<?php
				 while ($row = $result->fetch_assoc()) { ?>            
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-8" style="margin-bottom:10px;">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img" src="../administracion/<?php echo $row["imagen"] ?>">
                                <div class="card-block">
                                    <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br> <?php echo $row["texto_noticia"] ?>  </p></center>
                                     <hr class="hr--small">
                                 </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
		</div>	
		<?php
		include("../includes/carrusel.php");
		?>
		<br><br>

		<?php
		include("ventas_eventos.php");
		?>

	</div>
	<?php
	include("../includes/footer.php");
	?>

</body>
</html>