<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["rte1"];
$foto_shit=$_POST["imagen_especial_home"];

//echo"$contenido";
if (($contenido=="") and ($foto_shit="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 exit();
}

else {
//$sqlinsertar= "INSERT INTO informacion (fecha, contenido,sumario, titulo) VALUES (\"$contenido\",\"$contenido\", \"$sumario\", \"$titulo\")";

$sqlinsertar= "INSERT INTO informacion VALUES (Null, NOW(), '$contenido', '$sumario', '$titulo', '', '')";
//echo"$sqlinsertar"; 
$resultado=mysql_query($sqlinsertar,$link); 
}
echo "<script language='JavaScript'>alert('Datos incluidos satisfactoriamente');</script>";
 
 
 $lastshit = mysql_insert_id();
      
$nombre_origfoto_0_nota = $HTTP_POST_FILES['imagen_especial_home']['name'];

if ($nombre_origfoto_0_nota!='')
{
$nombre_original = $HTTP_POST_FILES['imagen_especial_home']['name'];
$carpeta = '../../../../imagenes/diasespeciales/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF-ESPC'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_especial_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update informacion set  img_especial_home='$nombre_new' where id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 

}

$nombre_fotogrande = $HTTP_POST_FILES['imagen_especial_interno']['name'];

if ($nombre_fotogrande!='')
{
$nombre_original = $HTTP_POST_FILES['imagen_especial_interno']['name'];
$carpeta = '../../../../imagenes/diasespeciales/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF-ESPCGR'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_especial_interno']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update informacion set  img_especial_interno='$nombre_new' where id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 

}

 mysql_close($link); 

?>

