<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$convoca=$_POST["convoca"];
$descripcion=$_POST["descripcion"];
$fecha=$_POST["fecha"];
$hora=$_POST['hora'];
$lugar=$_POST['lugar'];

if (($descripcion=="") or ($lugar=="") or ($fecha=="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
}

else {
if ($hora==""){
$hora="-"; }
$sqlinsertar= "INSERT INTO eventos 
	(fecha, hora, institucion, descripcion, lugar) 
	VALUES 
	(\"$fecha\", \"$hora\", \"$convoca\",\"$descripcion\",\"$lugar\")";
 
$resultado=mysql_query($sqlinsertar,$link); 
}
if ($resultado){
		echo "<script language='JavaScript'>alert('Los datos han sido guardados');</script>";
		
		}
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>"; 
?>


