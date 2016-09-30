<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$contenido=$_POST["rte1"];
$sumario=$_POST['sumario'];
$titulo=$_POST["titulo"];
$id=$_POST["id_nota"];

//$actualizar="update m_noticia set   m_noticia_videoarchivo='$nombre_new' where  m_noticia_id='$id_nota'"; 
$actualizar="update informacion set contenido='$contenido', sumario='$sumario', titulo='$titulo' where id=$id"; 
$resultado=mysql_query($actualizar,$link); 
//echo"$actualizar";

echo "<script language='JavaScript'>alert('Sus datos fueron actualizados correctamente');</script>";

$nombre_special = $HTTP_POST_FILES['imagen_especial_home']['name'];

if ($nombre_special<>"") 
{
$nombre_original = $HTTP_POST_FILES['imagen_especial_home']['name'];
$carpeta = '../../../../../imagenes/diasespeciales/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF-ESP-HOME'.$id_nota.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_especial_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update informacion set  img_especial_home='$nombre_new' where id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}


$nombre_special_interno = $HTTP_POST_FILES['imagen_especial_interno']['name'];

if ($nombre_special_interno<>"") 
{
$nombre_original = $HTTP_POST_FILES['imagen_especial_interno']['name'];
$carpeta = '../../../../../imagenes/diasespeciales/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF-ESP-INT'.$id_nota.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_especial_interno']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update informacion set  img_especial_interno='$nombre_new' where id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}


echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>