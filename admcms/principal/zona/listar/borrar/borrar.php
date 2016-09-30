<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id_encuesta=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_tuzona WHERE m_tuzona_id = '$id_encuesta'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('La encuesta ha sido eliminada');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
