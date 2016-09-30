<? include('../../../../extras/connect.php');
$link=Conectarse();
$id=$_POST["id"];
$departamento=$_POST["departamento"];
$numero=$_POST["numero"];
$SQL="UPDATE m_abreviados SET m_abreviados_nombre='$departamento', m_abreviados_numero='$numero' WHERE m_abreviados_id='$id'";
$query_edita=mysql_query($SQL, $link);
if ($query_edita){
	 echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido cargados');</script>";
		}
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>