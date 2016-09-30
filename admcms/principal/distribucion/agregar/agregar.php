<? include('../../../extras/connect.php'); 
$link=Conectarse();
$sql="INSERT INTO m_ver_telesur VALUES(Null, '', NOW())";

$query=mysql_query($sql, $link);


if ($query)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }
  $last=mysql_insert_id();
$nombre_origarchivo = $HTTP_POST_FILES['archivo']['name'];

$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];


$nombre_original = $HTTP_POST_FILES['archivo']['name'];

if ($nombre_original!='')
{
$carpeta = '../../../../image/ver_telesur/';
$numerito=rand(0, 1115);
$nombre_new = 'Telesur_'.$last.'_'.$numerito .'.'.$extension;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_ver_telesur set  m_ver_telesur_archivo='$nombre_new' where m_ver_telesur_id='$last'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
}


 



?>