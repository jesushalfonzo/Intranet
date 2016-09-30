<?php
  
include ('../../../../extras/connect.php');
$link=Conectarse();
$idelemento= $_GET["clx"]; 

$borrar="DELETE FROM m_elementos_home WHERE m_elementos_home_id='$idelemento'";	
$resultado=mysql_query($borrar,$link);
echo "<script language='JavaScript'>parent.principal.location.href='../index.php';</script>";
?>

