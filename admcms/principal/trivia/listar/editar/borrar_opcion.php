<?php
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["id"]; 

$SQL2="DELETE FROM r_trivia_pregunata_opc WHERE r_trivia_pregunata_opc_id='$id'";	
$resultado2=mysql_query($SQL2,$linky);

?>

