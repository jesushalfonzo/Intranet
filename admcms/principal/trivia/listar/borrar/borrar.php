<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine1="DELETE FROM  m_trivia WHERE m_trivia_id = '$id'";
	  $result1 = mysql_query($soulsismine1,$link);
	  
	   $soulsismine2="DELETE FROM  m_trivia_pregunta WHERE m_trivia_pregunta_idtrivia = '$id'";
	  $result2 = mysql_query($soulsismine2,$link);
	  


      if ($result1) {
		echo "<script language='JavaScript'>alert('El registro ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
