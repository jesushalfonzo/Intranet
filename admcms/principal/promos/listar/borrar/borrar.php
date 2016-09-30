<? include ('../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id_video=$_GET["clx"];	 
	  
	  $soulsismine="DELETE FROM  m_videos_promos WHERE m_videos_promos_id = '$id_video'";
	  $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('El video ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
		}
		
	 

?>
