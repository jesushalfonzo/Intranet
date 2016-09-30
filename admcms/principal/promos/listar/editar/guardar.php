<?php 
include ('../../../../extras/connect.php');
$linky=Conectarse();
$titulo=$_POST["titulo"];
$id=$_POST["id_video"];
$sql = "UPDATE m_videos_promos SET m_videos_promos_titulo='$titulo' WHERE m_videos_promos_id='$id'";
$sql_query = mysql_query($sql, $linky);

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


if ($video!='')
{
if($extension!='flv'){
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .flv');</script>";  
exit();
}
$carpeta = '../../../../../multimedia/videos/';
$numerito=rand(0, 1115) . '.flv';
$nombre_new = 'VideoEDT'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.flv';

    if (move_uploaded_file($HTTP_POST_FILES['video']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $video ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $video No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_videos_promos set  m_videos_promos_archivo='$nombre_new' where m_videos_promos_id='$id'"; 
$resultado=mysql_query($actualizar,$linky); 
}

//FIN

  
  //LAS IMAGENES DESPUES
$imagen = $HTTP_POST_FILES['imagen']['name'];
$separarlos = explode('.',$imagen);
$archivos=$separarlos[0];
$extensiones=$separarlos[1];


if ($imagen!='')
{
if($extensiones!='jpg'){
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();
}
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'IMGedt'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_videos_promos set  m_videos_promos_imagen='$nombre_new' where m_videos_promos_id='$id'"; 
$resultado=mysql_query($actualizar,$linky); 
}

//FIN

  
  
  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
 ?>
