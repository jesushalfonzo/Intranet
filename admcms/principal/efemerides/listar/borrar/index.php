<? include ('../../../../extras/connect.php');?>
	 <script language="JavaScript">
<!--
if (!confirm("Esta seguro que desea eliminar esta efeméride? "))
{
 history.back();
}
//-->
</script>
	 
	 <? 
	 $link=Conectarse();   
	  $id=$_GET["clx"];
	  	  
	  $sqlborrar="delete FROM historico where id = '$id'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

		if ($result){
		echo "<script language='JavaScript'>alert('Los datos han sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
		}

?>