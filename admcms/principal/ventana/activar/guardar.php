<?php 
include('../../../extras/connect.php');
$link=Conectarse();
$id=$_GET["id"];
$consult="UPDATE m_control_ventana SET m_control_ventana_activo  = '$id' WHERE m_control_ventana_id ='1'";
$result = mysql_query($consult,$link);
if($result){
echo utf8_encode("Actualización Correcta");
}
else{
echo utf8_encode("ERROR durante la actualización");
}
?>