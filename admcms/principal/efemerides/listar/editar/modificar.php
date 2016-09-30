<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id"];  
$resumenefe=$_POST["titulo"];
$anoefe=$_POST["ano"];

$fechaefe=$_POST["fecha"];

$actualizar="update historico set resumen='$resumenefe', año='$anoefe' , fecha='$fechaefe' where id=$id"; 
$resultado=mysql_query($actualizar,$link); 

echo "<script language='JavaScript'>alert('Sus datos fueron actualizados');</script>";

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>