<? include('../../../../extras/connect.php');
$link=Conectarse();
$id=$_POST["id"];
$departamentoL=$_POST["departamentoL"];
$departamento=$_POST["departamento"];

$numero=$_POST["numero"];
$SQL="UPDATE m_extensiones SET m_extensiones_departamento='$departamentoL', m_extensiones_numero='$numero', m_extensiones_idDep='$departamento' WHERE m_extensiones_id='$id'";
$query_edita=mysql_query($SQL, $link);
if ($query_edita){
	 echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido cargados');</script>";
		}
		echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>