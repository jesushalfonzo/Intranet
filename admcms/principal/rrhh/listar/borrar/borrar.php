<? include ('../../../../extras/connect.php');
include ('../../../../GENERAR/GenerarXML-Actualidad.php'); 
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_rhh_info WHERE m_rhh_info_id = '$id'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El registro ha sido Eliminado');</script>";
			$slaches="../../../../../";
			GenerarXML($slaches);
		 echo "<script language='JavaScript'>document.location.href='../index.php';</script>";	
		}
		
	 

?>
