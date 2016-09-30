<?
include('../../../../extras/connect.php');
$linky=Conectarse();
$leyenda=$_POST["leyenda"];
$id_galeria=$_POST["id_galeria"];
$SQL="INSERT INTO m_galeria_fotos VALUES(Null, '$id_galeria', '','', '$leyenda', NOW());";
$query=mysql_query($SQL, $linky);
$lastshit=mysql_insert_id();
if ($query)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }; 

//AHORA LA FOTO GRANDE

$nombre_foto = $_FILES['foto']['name'];


if ($nombre_foto!='')
{
$nombre_original = $_FILES['foto']['name'];
$carpeta = '../../../../../imagenes/foto_galerias/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'GALERIA'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_fotos set m_galeria_fotos_imagen ='$nombre_new' where m_galeria_fotos_id ='$lastshit'"; 

$resultado=mysql_query($actualizar,$linky); 
}


//AHORA LA FOTO PEQUEÑA

$nombre_foto_home = $_FILES['foto_home']['name'];


if ($nombre_foto_home!='')
{
$nombre_original = $_FILES['foto_home']['name'];
$carpeta = '../../../../../imagenes/foto_galerias/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'GAL_index'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_fotos set m_galeria_fotos_imagenpeq ='$nombre_new' where m_galeria_fotos_id ='$lastshit'"; 

$resultado=mysql_query($actualizar,$linky); 
}
echo "<script language='JavaScript'>document.location.href='index.php?clx=$id_galeria';</script>";	
 ?>