<? include ('../../../extras/connect.php');
 

$titulo=$_POST["titulo"];

$archivo=$_POST["parrilla"];  // ojo aqui va la ruta de la imagen... o al menos el nombre del archivo.... !!!!


$tirasql="INSERT INTO parrilla (titulo) VALUES (\"$titulo\")";


//echo"$tirasql";
	   $link=Conectarse();   
       $resultado=mysql_query($tirasql,$link); 
if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }
$lastshit = mysql_insert_id();
      
$nombre_origparrilla = $HTTP_POST_FILES['parrilla']['name'];

if ($nombre_origparrilla!='')
{
$nombre_original = $HTTP_POST_FILES['parrilla']['name'];
$carpeta = '../../../../documentos/parrillas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'PARRILLA'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['parrilla']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update parrilla set  archivo='$nombre_new' where id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}

$parrilla_grande = $HTTP_POST_FILES['parrilla_grande']['name'];

if ($parrilla_grande!='')
{
$nombre_original = $HTTP_POST_FILES['parrilla_grande']['name'];
$carpeta = '../../../../documentos/parrillas/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'PARRILLAXG'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['parrilla_grande']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $parrilla_grande ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $parrilla_grande No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update parrilla set  archivo_grande='$nombre_new' where id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}

 mysql_close($link); 

  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";

  
?>