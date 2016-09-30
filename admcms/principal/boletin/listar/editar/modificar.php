<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse();   

$titulo=$_POST["titulo"];
$id=$_POST["id"];

$actualizar="update m_boletin set m_boletin_titulo='$titulo' where m_boletin_id=$id"; 
$resultado=mysql_query($actualizar,$link); 

echo "<script language='JavaScript'>alert('Sus datos fueron actualizados correctamente');</script>";

$imagen_1 = $HTTP_POST_FILES['imagen_1']['name'];

if ($imagen_1<>"") 
{
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'BOLET_EDT'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_1']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen_1 ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen_1 No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_boletin set  m_boletin_imagen_1='$nombre_new' where m_boletin_id ='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}


$imagen_2 = $HTTP_POST_FILES['imagen_2']['name'];

if ($imagen_2!="") 
{
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'BOLET_EDT_2'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen_2']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen_2 ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen_2 No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_boletin set  m_boletin_imagen_2='$nombre_new' where m_boletin_id ='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}


echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>