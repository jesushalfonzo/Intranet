<?php
include ('../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["id"]; 
$borrar="UPDATE r_trivia_pregunata_opc SET r_trivia_pregunata_opc_correcta='SI' WHERE r_trivia_pregunata_opc_id='$id'";	
$resultado=mysql_query($borrar,$link);

?>
