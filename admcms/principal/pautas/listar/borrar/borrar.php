<? include ('../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $id=$_GET["clx"];
	  
	  

	  $sqlborrar="delete FROM  pautas_post where id_pauta = '$id'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('El documento ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
		}

?>