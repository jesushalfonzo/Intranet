<?php 
include('../../../extras/connect.php');
$link=Conectarse();
	  $consult="update m_rhh_info SET m_rhh_info_home1 = 'NO'";
	  $result = mysql_query($consult,$link);
$iId=$_GET["id"];
	  $sQuery="update m_rhh_info set m_rhh_info_home1 = 'SI' where  m_rhh_info_id=$iId";
	  $resultado=mysql_query($sQuery,$link); 
	 


?>