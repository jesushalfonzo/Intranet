<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$contenido=$_POST["contenido"];
$ano=$_POST["ano"];
$fecha=$_POST["fecha"];
$tabla="historico";
$festividad="NO";

if (($contenido=="") or ($ano=="") or ($fecha=="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
}

else {
$sqlinsertar= "INSERT INTO $tabla 
	(fecha, año, resumen, festividad) 
	VALUES 
	(\"$fecha\", \"$ano\", \"$contenido\",\"$festividad\")";
 
$resultado=mysql_query($sqlinsertar,$link); 
echo "<script language='JavaScript'>alert('Los datos han sido guardados');</script>";
		echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>"; 
}
  
?>

