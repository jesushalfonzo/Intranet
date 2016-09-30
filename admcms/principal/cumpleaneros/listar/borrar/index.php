<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $id=$_GET["clx"];
	  $mes=$_GET["mes"];
	  $sqlborrar="DELETE FROM m_cumpleaneros WHERE m_cumpleaneros_id = '$id'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('Los datos han sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php?tkl=$mes';</script>"; 
		}
		

?>