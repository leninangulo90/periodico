<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Visita nuestra galeria y busca tu foto del evento</h3>
        </div>
        <div class="panel-body">
            <div class="alert alert-info alert-dismissable">
                <strong>A continuación se muestran nuestros diferentes eventos, tales como XV años, Bodas, Bautizos entreo otros.</strong> Dar click para entrar
            </div>
            <div class="row">
                <form>
                    <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT * FROM eventos WHERE codigo_evento = 1000 ORDER BY codigo_evento";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-6 mt-6" style="margin-bottom:10px;">
                <div class="cardxv">
                    <a href="#">
                        <img class="cardxv-img-top imgxv" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="cardxv-block">
                            <center><p style="color:black;"><b><?php echo $row["evento"]?></b><br></p></center>
                            <button class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Noticia&nbsp<span class="glyphicon glyphicon-list-alt"></span></button><br>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>

            <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT * FROM eventos WHERE codigo_evento = 1001 ORDER BY codigo_evento";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-6 mt-6" style="margin-bottom:10px;">
                <div class="card3">
                    <a href="#">
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="card3-block">
                            <center><p style="color:black;"><b><?php echo $row["evento"]?></b><br></p></center>
                            <button class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Noticia&nbsp<span class="glyphicon glyphicon-list-alt"></span></button><br>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>
          
            <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT * FROM eventos WHERE codigo_evento = 1002 ORDER BY codigo_evento";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-6 mt-6" style="margin-bottom:10px;">
                <div class="card3">
                    <a href="#">
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="card3-block">
                            <center><p style="color:black;"><b><?php echo $row["evento"]?></b><br></p></center>
                            <button class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Noticia&nbsp<span class="glyphicon glyphicon-list-alt"></span></button><br>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>

            <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT * FROM eventos WHERE codigo_evento = 1004 ORDER BY codigo_evento";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-6 mt-6" style="margin-bottom:10px;">
                <div class="card3">
                    <a href="#">
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="card3-block">
                            <center><p style="color:black;"><b><?php echo $row["evento"]?></b><br></p></center>
                            <button class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Noticia&nbsp<span class="glyphicon glyphicon-list-alt"></span></button><br>
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