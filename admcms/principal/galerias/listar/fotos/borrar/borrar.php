<? include('../../../../../extras/connect.php');
include ('../../../../../GENERAR/GenerarXML-Actualidad.php'); 
	  $link=Conectarse();	     
	  $id=$_GET["clx2"];
	  $general=$_GET["clx"];
	  
	  $soulsismine="DELETE FROM m_galeria_fotos WHERE m_galeria_fotos_id='$id'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('La foto ha sido eliminada');</script>";
		
		
			$slaches="../../../../../../";
			GenerarXML($slaches);

		echo "<script language='JavaScript'>document.location.href='../index.php?clx=$general';</script>";	
		}
		
	 

?>
