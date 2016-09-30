<? include ('../../../../extras/connect.php');?>

<? 

$id_parrilla=$_POST["id"];
$titulo_parrilla=addslashes($_POST["titulo"]);




$tirasql= "update parrilla set titulo='$titulo_parrilla' where id = $id_parrilla";
//echo"$tirasql";
	   $link=Conectarse();   
      $resultado=mysql_query($tirasql,$link); 
  if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }

$nombre_orig_parrilla = $HTTP_POST_FILES['archivo']['name'];

if ($nombre_orig_parrilla<>"") 
{
$nombre_original = $HTTP_POST_FILES['archivo']['name'];
$carpeta = '../../../../../documentos/parrillas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'MNF'.$id_parrilla.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update parrilla set  archivo='$nombre_new' where  id='$id_parrilla'"; 
$resultado=mysql_query($actualizar,$link); 

}


$nombre_orig_parrilla_grande = $HTTP_POST_FILES['parrilla_grande']['name'];

if ($nombre_orig_parrilla_grande<>"") 
{
$nombre_original = $HTTP_POST_FILES['parrilla_grande']['name'];
$carpeta = '../../../../../documentos/parrillas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'ParrillaXG'.$id_parrilla.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['parrilla_grande']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update parrilla set  archivo_grande='$nombre_new' where  id='$id_parrilla'"; 
$resultado=mysql_query($actualizar,$link); 
}

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";



?>


