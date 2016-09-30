<? include ('../../../extras/connect.php');?>

<? 

$id=$_POST["id"];
$contenido=$_POST["rte1"];
$actualizar=$_POST["actualizacion"];


$archivo=$_POST["archivo"];  // ojo aqui va la ruta del archivo... o al menos el nombre del archivo.... !!!!




$tirasql= "update hcm set contenido='$contenido', actualizacion= '$actualizar' where id = $id";
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




$nombre_origarchivo = $HTTP_POST_FILES['archivohcm']['name'];
$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];


if ($nombre_origarchivo!='')
{
$carpeta = '../../../../documentos/hcm/';
$nombre_temporal = 'temporal.$tipo_ext';

    if (move_uploaded_file($HTTP_POST_FILES['archivohcm']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_origarchivo); 
chmod($carpeta.$nombre_origarchivo, 0644);
$actualizar="update hcm set  archivo='$nombre_origarchivo' where id='$id'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}
 mysql_close($link); 



  
?>