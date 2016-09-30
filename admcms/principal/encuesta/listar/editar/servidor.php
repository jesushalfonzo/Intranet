<?php
  
include ('../../../../extras/connect.php');
$link=Conectarse();
$idelemento= $_GET["idelemento"]; 

$borrar="DELETE FROM r_opciones_encuestas WHERE r_opciones_encuestas_id='$idelemento'";	
$resultado=mysql_query($borrar,$link);

?>

