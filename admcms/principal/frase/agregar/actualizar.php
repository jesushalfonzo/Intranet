<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse(); 

$frase=$_POST["frase"];

if ($frase<>"") {

$actualizar="update frase set frase='$frase' where id=1"; 
$resultado=mysql_query($actualizar,$link); 
  echo "<script language='JavaScript'>alert('Frase guardada satisfactoriamente)');</script>";
 }
 else {
 echo "<script language='JavaScript'>alert('El campo Frase se encuentra vacio (NO se puede hacer la inclusión)');</script>";
 echo "<script language='JavaScript'>document.location.href='index.php';</script>";
 }
 
 //echo"$actualizar";

?>