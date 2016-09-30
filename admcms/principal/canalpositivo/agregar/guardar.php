<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$nombre=$_POST["nombre"];
$sumario=$_POST["sumario"];
$contenido=$_POST["rte1"];


if (($nombre=="") or  ($contenido=="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
}

else {
$sqlinsertar= "INSERT INTO canalpositivo 
	(contenido, nombre, sumario) 
	VALUES 
	(\"$contenido\", \"$nombre\", \"$sumario\")";
//echo"$sqlinsertar"; 
$resultado=mysql_query($sqlinsertar,$link); 
}
 echo "<script language='JavaScript'>alert('Sus datos fueron guardados satisfactoriamente');</script>"; 
 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>

