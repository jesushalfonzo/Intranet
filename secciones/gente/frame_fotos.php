<?php 
include('../../extras/coneccion.php');
$link=Conectarse();
$masterSeccio="GENTE";
if (isset($_GET["idgaleria"])){$id_galeria=$_GET["idgaleria"]; }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <style>
body {background-color:transparent;}
            /* Demo styles */
            body{border-top:4px;}
            .content{font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px}

        </style>

        <!-- load jQuery -->
        <script src="GaleriaJS/jquery.js"></script>

        <!-- load Galleria -->
        <script src="GaleriaJS/galleria-1.2.8.min.js"></script>

    </head>
<body>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it's not necessary -->

        <div id="galleria">
<?php
	
  $GALERIASQL="SELECT m_galeria_fotos_imagenpeq, m_galeria_titulo, m_galeria_fotos_idgaleria, m_galeria_fotos_imagen, m_galeria_fotos_leyenda FROM m_galeria_fotos, m_galerias WHERE m_galeria_fotos_idgaleria = '$id_galeria' and m_galeria_id='$id_galeria' AND m_galeria_estatus='A' ORDER BY m_galeria_fotos_id DESC";
  $query_galeria=mysql_query($GALERIASQL, $link);
  while ($row_galeria=mysql_fetch_array($query_galeria)){
  $foto=$row_galeria['m_galeria_fotos_imagenpeq'];
  $id_galeria=$row_galeria['m_galeria_fotos_idgaleria'];
  $m_galeria_fotos_imagen=$row_galeria['m_galeria_fotos_imagen'];
  $m_galeria_fotos_leyenda=utf8_encode($row_galeria['m_galeria_fotos_leyenda']); 
  $m_galeria_titulo =$row_galeria['m_galeria_titulo']; 
	  				  
					  ?>
  <a href="../../imagenes/foto_galerias/<? echo"$m_galeria_fotos_imagen"; ?>"><img data-title="<? echo"$m_galeria_fotos_leyenda"; ?>"                data-description="<? echo"$m_galeria_fotos_leyenda"; ?>" src="../../imagenes/foto_galerias/<? echo"$m_galeria_fotos_imagen"; ?>">
            </a>

<?php } ?>
        </div>

    </div>

    <script>

    // Load the classic theme
    Galleria.loadTheme('GaleriaJS/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html>