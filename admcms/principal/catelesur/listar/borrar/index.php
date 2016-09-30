<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $id=$_GET["clx"];
	  $sqlborrar="DELETE FROM m_catelesur WHERE m_catelesur_id = '$id'";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('Los datos han sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
		}
		

?>