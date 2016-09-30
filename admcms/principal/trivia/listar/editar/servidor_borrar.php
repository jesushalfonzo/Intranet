<?php
include ('../../../../extras/connect.php');
$linky=Conectarse();
$id=$_GET["id"]; 

$SQL="DELETE FROM m_trivia_pregunta WHERE m_trivia_pregunta_id='$id'";	
$resultado=mysql_query($SQL,$linky);

$SQL2="DELETE FROM r_trivia_pregunata_opc WHERE r_trivia_pregunata_opc_idpregunta='$id'";	
$resultado2=mysql_query($SQL2,$linky);

?>

