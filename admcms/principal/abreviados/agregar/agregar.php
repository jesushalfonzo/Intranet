<? include('../../../extras/connect.php');
$link=Conectarse();
$departamento=$_POST["nombre"];
$extension=$_POST["numero"];
$SQl_agrega="INSERT INTO m_abreviados VALUES (Null, '$departamento','$extension')";
$query_agregar=mysql_query($SQl_agrega, $link);
if ($query_agregar){
	 echo "<script language='JavaScript'>alert('Sus datos han sido cargados satisfactoriamente');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido cargados');</script>";
		}
		echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";