<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Elecciones 2017 Coahuila</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <form>
                    <?php
            require_once("../includes/conexion.php");
            mysqli_query($mysqli,"SET NAMES 'utf8'"); 
            $sql = "SELECT imagen, id_noticia, titulo_noticia,texto_noticia,titulo_categoria,codigo_noticia_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 107 ORDER BY  noticias.id_noticia";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4" style="margin-bottom:10px;">
                <div class="cardxv">
                   <a href="">
                        <img class="cardxv-img-top imgxv" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="cardxv-block">
                            <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br> <?php echo $row["titulo_categoria"] ?>  </p></center>
                            <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>
                </form>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div id="result4"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>