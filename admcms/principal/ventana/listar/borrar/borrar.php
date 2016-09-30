<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine1="DELETE FROM  m_ventanaemergente WHERE m_ventanaemergente_id = '$id'";
	  $result1 = mysql_query($soulsismine1,$link);
      if ($result1) {
		echo "<script language='JavaScript'>alert('El registro ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
