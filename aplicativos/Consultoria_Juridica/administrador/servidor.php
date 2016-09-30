<?php
include('logeo.php');
include('../../../extras/coneccion.php');
$link=Conectarse();

$variableid=addslashes($_GET["idcita"]);
$idsolicitud=addslashes($_GET["idsolicitud"]);
$SQL="DELETE FROM m_citas_juridicas WHERE m_citas_juridicas_id='$variableid'";
$QUERY=mysql_query($SQL, $link);

$sql="SELECT m_citas_juridicas_fechacita FROM m_citas_juridicas WHERE m_citas_juridicas_idsolicitud='$idsolicitud' ORDER BY m_citas_juridicas_fechacita DESC";
$que=mysql_query($sql, $link);
$row=mysql_fetch_array($que);
$ultimacita=$row['m_citas_juridicas_fechacita'];

$sql2="UPDATE m_aplicativo_cjuridica SET m_aplicativo_cjuridica_fechaasignada='$ultimacita' WHERE m_aplicativo_cjuridica_id='$idsolicitud'";
 $otroquery=mysql_query($sql2, $link);
 
 if(($otroquery) and ($QUERY)){
 echo "1";
 }
?>