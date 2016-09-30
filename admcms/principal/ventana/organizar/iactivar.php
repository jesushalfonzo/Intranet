<?php 
include('../../../extras/connect.php');
$link=Conectarse();
	  $consult="update m_ventanaemergente SET m_ventanaemergente_home  = 'NO'";
	  $result = mysql_query($consult,$link);
$iId=$_GET["id"];
	  $sQuery="update m_ventanaemergente set m_ventanaemergente_home = 'SI' where  m_ventanaemergente_id =$iId";
	  $resultado=mysql_query($sQuery,$link); 
	 


?>