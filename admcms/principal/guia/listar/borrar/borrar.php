<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_guia_telesur WHERE m_guia_telesur_id = '$id'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El registro ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
