<? include ('../../../../../extras/connect.php');
	  $link=Conectarse();	     
	  $id_todo=$_GET["clx"];	 
	 $accion=$_GET["acc"];
	 $general=$_GET["gene"];
	 if($accion=='Desactivar'){
	  $guarda='NO';
	  }
	  else {
	   $guarda='SI';
	  }
	  $soulsismine="UPDATE m_tuvoz SET m_tuvoz_status='$guarda' WHERE m_tuvoz_id = '$id_todo'";
	 $result = mysql_query($soulsismine,$link);

      if ($result) {
		echo "<script language='JavaScript'>alert('Modificación exitosa');</script>";
		 echo "<script language='JavaScript'>document.location.href='../index.php?clx=$general';</script>";	
		}
		
	 

?>
