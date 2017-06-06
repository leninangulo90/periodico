<!DOCTYPE HTML>
<html>
<head>
    <meta content="text/html; charset=ANSI" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script type="text/javascript" src="../assets/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="..assets/bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
   <hr />
    <section id="SliderTest_Container" class="col-md-11">
        <div id="Carousel-AutosGTA" class="carousel slide" data-ride="carousel">
            <?php
                require_once("DBAccess.php");
                $DBA = new DBAccess();
                $Datos = $DBA->GetData("SELECT * FROM publicidad");
                if ($Datos == FALSE) {
                    echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta que ha enviado a DBAccess.php";
                } else {
                    $Rows = mysql_num_rows($Datos);
                    echo '<ol class="carousel-indicators">';
                    for ($i=0; $i<$Rows; $i++) {
                        if ($i == 0) {
                            echo '<li data-target="#Carousel-AutosGTA" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#Carousel-AutosGTA" data-slide-to="' . $i . '"></li>';
                        }
                    }
                    echo '</ol>';
                    echo '<div class="carousel-inner" role="listbox">';
                    for ($i=0; $i<$Rows; $i++) {
                        $Auto = mysql_fetch_array($Datos);
                        if ($i == 0) {
                            echo '<div class="item active">';
                        } else {
                            echo '<div class="item">';
                        }
                        echo '<img style="width: 100%;" src="../images/' . $Auto["imagen"] . '"/>';
                        echo '<div class="carousel-caption">';
                                echo '</div>';//Caption
                        echo '</div>';//ITEM
                    }//FOR
                    echo '</div>';
                }//ELSE
            ?>
            <!-- Controls -->
            <a class="left carousel-control" href="#Carousel-AutosGTA" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#Carousel-AutosGTA" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    </div>
    <hr />
	
</body>
</html>