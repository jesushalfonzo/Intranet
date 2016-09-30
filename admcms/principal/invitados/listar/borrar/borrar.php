<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM m_invitados_especiales WHERE m_invitados_especiales_id='$id'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El registro ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";	
		}
		
	 

?>
