<?php 
include('../../../extras/connect.php');
include ('../../../GENERAR/GenerarXML-Actualidad.php');
$link=Conectarse();
	  $consult="update m_inf_interes SET m_inf_interes_home = 'NO'";
	  $result = mysql_query($consult,$link);
$iId=$_GET["id"];
	  $sQuery="update m_inf_interes set m_inf_interes_home = 'SI' where  m_inf_interes_id=$iId";
	  $resultado=mysql_query($sQuery,$link); 

	   GenerarXML('../../../../');
?>