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
            background-color: white;
            border: 2px;
            border-color: black;
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



    <?php
        include("menu.php");
        include("horoscopos.php");
    ?>

        <br>

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

                <?php
                    include("elecciones_2017.php");
                ?>

                <div class="panel-body">
                <?php
                require_once("../includes/conexion.php");
                mysqli_set_charset($mysqli, "utf8");
                $sql = "SELECT imagen, id_noticia, titulo_noticia,texto_noticia,titulo_categoria,codigo_noticia_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 100 ORDER BY  noticias.id_noticia DESC LIMIT 1";
                $result = $mysqli->query($sql);
                while ($row = $result->fetch_assoc()) { ?>            
                    <div class="col-sm-12 col-md-12 col-lg-12 mt-8" style="margin-bottom:10px;">
                        <div class="card">
                             <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>">
                                <img class="card-img-top img" src="../administracion/<?php echo $row["imagen"] ?>">
                                <div class="card-block">
                                    <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br> <?php echo $row["titulo_categoria"] ?>  </p></center>
                                    <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
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
                    require_once("../includes/conexion.php");
                    mysqli_set_charset($mysqli, "utf8");
                    $sql = "SELECT imagen, id_noticia, titulo_noticia, texto_noticia, codigo_noticia_categoria, titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 101 ORDER BY noticias.id_noticia DESC LIMIT 1";
                    $result = $mysqli->query($sql);
                    while ($row = $result->fetch_assoc()) { ?>
                <div class="col-sm-6 col-md-6 col-lg-6 mt-4" style="margin-bottom:10px;">
                    <div class="card2">
                    <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>">
                            <img class="card2-img-top img2" src="../administracion/<?php echo $row["imagen"] ?>">
                            <div class="card2-block">
                                 <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br><?php echo $row["titulo_categoria"] ?></p></center>                                  
                                 <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

            <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, id_noticia, titulo_noticia, texto_noticia, codigo_noticia_categoria, titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 103 ORDER BY noticias.id_noticia DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-6 col-lg-6 mt-4" style="margin-bottom:10px;">
                <div class="card2">
                    <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>">
                        <img class="card2-img-top img2" src="../administracion/<?php echo $row["imagen"]?>">
                        <div class="card2-block">
                            <center><p style="color:black;"><b><?php  echo $row["titulo_noticia"] ?></b><br><?php echo $row["titulo_categoria"]?><br>
                           </p></center>
                           <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
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
            $sql = "SELECT imagen, id_noticia, titulo_noticia, texto_noticia, codigo_noticia_categoria,titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 104 ORDER BY noticias.id_noticia DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4" style="margin-bottom:10px;">
                <div class="card3">
                     <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>">
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"]?>">
                        <div class="card3-block">     
                            <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br><?php echo $row["titulo_categoria"] ?><br></p></center>
                           <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
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
            $sql = "SELECT imagen, id_noticia, titulo_noticia, texto_noticia, codigo_noticia_categoria, titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 105 ORDER BY noticias.id_noticia DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4" style="margin-bottom:10px;">
                <div class="card3">
                     <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>">
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="card3-block">           
                            <center><p style="color:black;"><b><?php echo $row["titulo_noticia"] ?></b><br><?php echo $row["titulo_categoria"] ?><br></p></center>             
                           <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
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
            $sql = "SELECT imagen, id_noticia, titulo_noticia, texto_noticia, codigo_noticia_categoria, titulo_categoria FROM categorias INNER JOIN noticias ON categorias.codigo_categoria = noticias.codigo_noticia_categoria WHERE categorias.codigo_categoria = 106 ORDER BY noticias.id_noticia DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
            <div class="col-sm-6 col-md-4 col-lg-4 mt-4" style="margin-bottom:10px;">
                <div class="card3">
                    <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>"> 
                        <img class="card3-img-top img3" src="../administracion/<?php echo $row["imagen"] ?>">
                        <div class="card3-block">
                            <center><p style="color:black;"><b><?php echo $row["titulo_noticia"]?></b><br><?php echo $row["titulo_categoria"]?><br></p></center>            
                           <a href="noticias.php?id=<?php echo base64_encode($row["id_noticia"]); ?>" class="btn btn-default" style="text-transform:uppercase;font-weight:bold;">Ver Evento&nbsp<span class="glyphicon glyphicon-camera"></span></a><br>
                        </div>
                    </a>
                </div>
            </div>
            <?php
                }
            ?>

            
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
   
        </div>

    </div>
    
</div>
    
</body>
</html>