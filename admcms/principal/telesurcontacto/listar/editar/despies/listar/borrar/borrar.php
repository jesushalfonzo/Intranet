<? include('../../../../../../../extras/connect.php');x
  ?>
	 
	 <? $link=Conectarse();   
	  $id=$_GET["clx"];
	  $id_nota=$_GET["ckl"];
	  

	  $sqlborrar="DELETE FROM m_noticias_despies WHERE m_noticias_despies_id = '$id'";
	  //echo"$sqlborrar";
	  $result = mysql_query($sqlborrar,$link);

     
		if ($result){
		echo "<script language='JavaScript'>alert('El despies ha sido eliminado');</script>";
		echo "<script language='JavaScript'>document.location.href='../index.php?ckl=$id_nota';</script>";
		}

?>