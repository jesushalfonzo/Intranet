<? include ('../../../../extras/connect.php');?>
	
	 
	 <? $link=Conectarse();   
	  $idperfil=$_GET["clx"];
	  
	  

	  $sqlborrar="delete FROM perfiles where id = '$idperfil'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('El documento ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
		}

?>