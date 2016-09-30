<?php
		include ('../../../extras/connect.php');
		include ('../../../GENERAR/GenerarXML-Home.php');
		$link=Conectarse();
		$idactivar=$_POST["opcion"];


   $blanqueqSQL="UPDATE m_elementos_home SET m_elementos_home_activo='NO'";
   $queryblnquea=mysql_query($blanqueqSQL, $link);
   
   
   
    if(!empty($_POST['opcion'])) {
      $aLista=array_keys($_POST['opcion']);
      foreach($aLista as $iId) {
	  $SQlactiva="UPDATE m_elementos_home SET m_elementos_home_activo='SI' WHERE m_elementos_home_id='$iId'";
	  $Query=mysql_query($SQlactiva, $link); 
	  };
 }
   
   
   
   echo "<script language='JavaScript'>alert('Actualizado correctamente');</script>";
   GenerarXMLHome('../../../../');
  echo "<script language='JavaScript'>document.location.href='index.php';</script>";

?>

