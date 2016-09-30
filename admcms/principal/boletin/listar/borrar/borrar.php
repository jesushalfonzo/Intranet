<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id_video=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_boletin WHERE m_boletin_id = '$id_video'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('Eliminado correctamente');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
