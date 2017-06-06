<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    
</head>
<body>
    <div class="container">
 
    <section id="slider" class="col-sm-8 col-md-12">
        <div id="Carousel-AutosGTA" class="carousel slide" data-ride="carousel">
            <?php
                require_once("../includes/DBAccess.php");
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
                        echo '<img style="width: 92.5%;"; src="../images/' . $Auto["imagen"] . '"/>';
                        echo '<div class="carousel-caption">';
                                echo '</div>';//Caption
                        echo '</div>';//ITEM
                    }//FOR
                    echo '</div>';
                }//ELSE
            ?>
            <!-- Controls -->
        </div>
    </section>
    </div>
	
</body>
</html>