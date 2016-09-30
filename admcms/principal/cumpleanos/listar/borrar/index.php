<? include ('../../../../extras/connect.php');
	  $link=Conectarse();   
	  $id=$_GET["clx"];
	  $sqlborrar="delete FROM cumpleanos where id = '$id'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('Los datos han sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
		}

?>