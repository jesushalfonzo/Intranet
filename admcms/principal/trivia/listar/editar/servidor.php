<?php
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["id"]; 
$idmas=$_GET["idmas"];

$SQL="UPDATE r_trivia_pregunata_opc SET r_trivia_pregunata_opc_correcta='NO' WHERE r_trivia_pregunata_opc_idpregunta='$idmas'";	
$resultado=mysql_query($SQL,$linky);

$SQL2="UPDATE r_trivia_pregunata_opc SET r_trivia_pregunata_opc_correcta='SI' WHERE r_trivia_pregunata_opc_id='$id'";	
$resultado2=mysql_query($SQL2,$linky);

?>

