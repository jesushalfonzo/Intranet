<? 
include ('../../../extras/connect.php');
include ('../../../GENERAR/GenerarXML-Actualidad.php');

	  $link=Conectarse();
	  
       $hora = date("H:i", time());
	  //1 nota
	    $id_galeria_cambiar=$_POST["galeria_cambiar"];
	
		if ($id_galeria_cambiar!=''){
		    $SQL_borrar="UPDATE m_galerias SET m_gelerias_activa_home='N'";
			$query_borrar=mysql_query($SQL_borrar, $link);
			//echo"$SQL_borrar";
			$tiraSQL="update m_galerias set m_gelerias_activa_home='S' where m_galeria_id='$id_galeria_cambiar'";
			$result = mysql_query($tiraSQL,$link);
						//echo"$tiraSQL";
		}
		

        echo "<script language='JavaScript'>alert('La galeria se ha cambiado correctamente en el Homeeee');</script>";
         GenerarXML('../../../../');
	    echo "<script language='JavaScript'>document.location.href='index.php';</script>";

?>