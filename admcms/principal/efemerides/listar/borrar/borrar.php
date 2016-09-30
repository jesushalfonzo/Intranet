<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM tuvoz WHERE tuvoz_id = '$id'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El registro ha sido Eliminado');</script>";
		 echo "<script language='JavaScript'>document.location.href='../index.php';</script>";	
		}
		
	 

?>
