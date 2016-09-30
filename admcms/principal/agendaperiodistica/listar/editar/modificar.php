<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id"];  
$convoca=$_POST["titulo"];
$evento=$_POST["contenido"];

$fecha=$_POST["fecha"];
$hora=$_POST['hora'];
$lugar=$_POST['lugar'];

$actualizar="update eventos set fecha='$fecha', hora='$hora' , institucion ='$convoca' , descripcion='$evento' , lugar='$lugar' where id=$id"; 
$resultado=mysql_query($actualizar,$link); 

echo "<script language='JavaScript'>alert('Sus datos fueron actualizados');</script>";
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

?>
  