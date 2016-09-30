<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $idvideo=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_somostelesur WHERE m_somostelesur_id = '$idvideo'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El video ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
