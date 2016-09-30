<? include ('../../../../extras/connect.php');?>

<? 

$id_perlas=$_POST["id_perla"];
$titulo_perla=addslashes($_POST["titulo_perla"]);




$tirasql= "update perlas set titulo_perlas='$titulo_perla' where id_perlas = $id_perlas";
//echo"$tirasql";
	   $link=Conectarse();   
      $resultado=mysql_query($tirasql,$link); 
  if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";  
   }

$nombre_origarchivo = $HTTP_POST_FILES['archivo_perlas']['name'];
if ($nombre_origarchivo!='')
{
$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];



$carpeta = '../../../../../perlas/';
//$numerito=rand(0, 1115) . '.$tipo';
//$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.$extension';

    if (move_uploaded_file($HTTP_POST_FILES['archivo_perlas']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_origarchivo); 
chmod($carpeta.$nombre_origarchivo, 0644);
$actualizar="update perlas set  archivo_perlas='$nombre_origarchivo' where  id_perlas='$id_perlas'"; 
echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";



?>


