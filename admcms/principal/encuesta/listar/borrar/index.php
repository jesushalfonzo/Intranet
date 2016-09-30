<?php
  
include ('../../../../extras/connect.php');
$link=Conectarse();
$idelemento= $_GET["clx"]; 

$borrar="DELETE FROM m_concurso_preguntas WHERE m_concurso_preguntas_id='$idelemento'";	
$resultado=mysql_query($borrar,$link);
echo "<script language='JavaScript'>parent.principal.location.href='../index.php';</script>";
?>

