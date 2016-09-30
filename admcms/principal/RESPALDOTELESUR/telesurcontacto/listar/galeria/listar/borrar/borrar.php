<? include ('../../../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $id_foto=$_GET["clx"];
	 
	  

	$sqlborrar="DELETE FROM m_galeria_nota WHERE  m_galeria_id='$id_foto'";
	  $result = mysql_query($sqlborrar,$link);
	  if ($result){
		echo "<script language='JavaScript'>alert('La foto ha sido eliminada');</script>";
		echo "<script language='JavaScript'>document.location.href='../../../index.php';</script>"; 
		}
	


?>