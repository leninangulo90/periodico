<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-8 sidenav hidden-xs">
            <ul class="nav nav-pills nav-stacked">
             <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 10 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>
               

                 <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 11 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>  
               
                   

                 <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 12 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>  

               
               <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 13 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>  
    
               
                 <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 14 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>      
               
                    <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 15 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>      
               
               
                <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 16 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>        
               
                <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 17 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>        
               
                <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 18 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?> 
               
                 
                <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 19 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>   
               
                 <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 20 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>   
               
               <?php
            require_once("../includes/conexion.php");
            mysqli_set_charset($mysqli, "utf8");
            $sql = "SELECT imagen, nombre_horoscopos,titulo_horoscopos, fecha_1, fecha_2 FROM horoscopos INNER JOIN horoscopos_notas ON horoscopos.codigo_horoscopos = horoscopos_notas.codigo_horoscopo_1 WHERE horoscopos.codigo_horoscopos = 21 ORDER BY horoscopos_notas.id_horoscopo DESC LIMIT 1";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <center><img src="../administracion/<?php echo $row['imagen'] ?>" width="60" class="img-rounded" style="border:1px solid silver;margin:10px;"></center>
                <center><p><b><?php echo $row['titulo_horoscopos']?></b></p><p><?php echo $row['fecha_1']?></p>-<p><?php echo $row['fecha_2']?></p></center>
                <li class="btn btn-default" style="text-transform:uppercase;font-weight:bold;"><?php echo $row['nombre_horoscopos']?><span class="glyphicon glyphicon-list-alt"></span></li>     
              <?php
                    }
                ?>
               
            </ul><br>
           </div>
</body>
</html>