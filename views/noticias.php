<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style>
		/* Set height of the grid so .sidenav can be 100% (adjust as needed) */

		.row.content {
			height: 570px
		}
		/* Set gray background color and 100% height */

		.sidenav {
			background-color: white;
			height: 220%;
			width: 8.2%;
			margin-top: -10px;

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

<?php
include("menu.php");
include("baner.php");
?>

<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/elfiscaldecoahuila/" target="_blank" id="icono_1" class="fa fa-facebook fa-2x"></a></li>
				<li><a href="#" target="_blank" id="icono_2" class="fa fa-twitter fa-2x"></a></li>
				<li><a href="#" target="_blank" id="icono_4" class="fa fa-instagram fa-2x"></a></li>
			</ul>
		</div>

<div class="col-sm-10">
	<div id="inicio">
		

		<div class="panel-body">


			<?php
			require("../includes/conexion.php");
			mysqli_query($mysqli,"SET NAMES 'utf8'"); 
			$id=base64_decode($_GET["id"]);
			$sql = "SELECT imagen, titulo_noticia,encabezado_noticia,texto_noticia,titulo_categoria,nombre_reportero,lugar_noticia FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria INNER JOIN reporteros ON reporteros.codigo_reportero = noticias.codigo_noticia_reportero WHERE noticias.id_noticia='$id'";
			$result= $mysqli->query($sql);
			 while ($row = $result->fetch_assoc()) { ?>            
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-8" style="margin-bottom:10px;">
                    	<div class="card">
                    		<div class="panel-heading">
                    			<header class="section-header text-center">
                    				<h1 class="section-header_title1"><?php echo $row["titulo_noticia"] ?></h1> 

                    				<p class="summary-text">
                    					<?php echo $row["encabezado_noticia"] ?>
                    				</p>
                    				<p>
                    					<b>	Por: 
                    					<?php echo $row["nombre_reportero"] ?>
                    					</b>
                    				</p>
                    				<hr class="hr--small">
                    			</header>
                    		</div>
                            <a href="#">
                                <img class="card-img-top img" src="../administracion/<?php echo $row["imagen"] ?>">
                                <div class="card-block">
                                    <center><p style="color:black;"><b></b><br></p></center>
                                 </div>
                            </a>
                            <p style="text-align: justify;"><b><?php echo $row["lugar_noticia"]."</b>" .".- ". $row["texto_noticia"] ?> </p>
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