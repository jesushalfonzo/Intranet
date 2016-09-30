<? 
include('../../../../../extras/connect.php');
include ('../../../../../GENERAR/GenerarXML-Actualidad.php'); 
$linky=Conectarse();
$id=$_POST["id_galeria"];
$leyenda=$_POST["leyenda"];
$id_general=$_POST["id_general"];
$EDITSQL="UPDATE m_galeria_fotos SET m_galeria_fotos_leyenda='$leyenda' WHERE m_galeria_fotos_id='$id'";
$query=mysql_query($EDITSQL, $linky);
if ($query)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }; 
  
//AHORA LA FOTO GRANDE

$nombre_foto = $_FILES['foto']['name'];


if ($nombre_foto!='')
{
$nombre_original = $_FILES['foto']['name'];
$carpeta = '../../../../../../imagenes/foto_galerias/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'GALERIAEDIT'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_fotos set m_galeria_fotos_imagen ='$nombre_new' where m_galeria_fotos_id ='$id'"; 

$resultado=mysql_query($actualizar,$linky); 
}

//AHORA LA FOTO PEQUEÑA

$nombre_foto_home = $_FILES['foto_home']['name'];


if ($nombre_foto_home!='')
{
$nombre_original = $_FILES['foto_home']['name'];
$carpeta = '../../../../../../imagenes/foto_galerias/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'GALinedit'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto_home']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_galeria_fotos set m_galeria_fotos_imagenpeq='$nombre_new' where m_galeria_fotos_id ='$id'"; 

$resultado=mysql_query($actualizar,$linky); 
}
$slaches="../../../../../../";
GenerarXML($slaches);
echo "<script language='JavaScript'>document.location.href='../index.php?clx=$id_general';</script>";	
 ?>