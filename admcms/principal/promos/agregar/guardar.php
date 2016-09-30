<?php
$titulo=$_POST["titulo"]; 
include ('../../../extras/connect.php');
$linky=Conectarse();
$fechacompleta=date('Y-m-d H:i:s');
$titulo=$_POST["titulo"];
$sql = "INSERT INTO m_videos_promos VALUES (Null, '$titulo', '', '', '$fechacompleta')";
$sql_query = mysql_query($sql, $linky);
$last = mysql_insert_id();


if ($sql_query)
  {  
  echo "<script language='JavaScript'>alert('Datos agregados correctamente');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Error, revise sus datos');</script>";   
  
  }
//LOS VIDEOS Y LAS MUJERES PRIMERO
$video = $HTTP_POST_FILES['video']['name'];
$separar = explode('.',$video);
$archivo=$separar[0];
$extension=$separar[1];
if($extension=='flv'){

if ($video!='')
{
$carpeta = '../../../..//multimedia/imagenes/';
$numerito=rand(0, 1115) . '.flv';
$nombre_new = 'Video'.$last.'_'.$numerito;
$nombre_temporal = 'temporal.flv';

    if (move_uploaded_file($HTTP_POST_FILES['video']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $video ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $video No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_videos_promos set  m_videos_promos_archivo='$nombre_new' where m_videos_promos_id='$last'"; 
$resultado=mysql_query($actualizar,$linky); 
}
}
else {
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .flv');</script>";  
exit();

}
//FIN


//AHORA LA FOTO PAL PLAYER
$imagen = $HTTP_POST_FILES['imagen']['name'];
$separar = explode('.',$imagen);
$archivo=$separar[0];
$extension=$separar[1];
if($extension=='jpg'){

if ($imagen!='')
{
$carpeta = '../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'IMG'.$last.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_videos_promos set  m_videos_promos_imagen='$nombre_new' where m_videos_promos_id='$last'"; 
$resultado=mysql_query($actualizar,$linky); 
}
}
else {
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();

}
//FIN
  
  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 ?>
