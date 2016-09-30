<? include ('../../../extras/connect.php');
	  $link=Conectarse();
	  
	  //1 nota
	    $id_entrevista_cambiar=$_POST["entrevista_cambiar"];
	
		if ($id_entrevista_cambiar!=''){
		    
			$tiraSQL="update t_entrevistas_home set t_entrevistas_home_id_entrevista='$id_entrevista_cambiar' where t_entrevistas_home_id=1";
			$result = mysql_query($tiraSQL,$link);
			//echo"$tiraSQL";			
		}
		

      echo "<script language='JavaScript'>alert('La entrevista se ha cambiado correctamente en el Home');</script>";
	    echo "<script language='JavaScript'>document.location.href='index.php';</script>";

?>