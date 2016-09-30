<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id_pauta=$_POST['id_pauta'];  
$titulo_pauta=$_POST["titulo_pauta"];
$contenido=$_POST["contenido"];

$sqlinsertar= "update pautas_post set titulo_pauta='$titulo_pauta', contenido_pauta='$contenido' where id_pauta = $id_pauta";
//echo"$sqlinsertar"; 
$resultado=mysql_query($sqlinsertar,$link); 
echo "<script language='JavaScript'>alert('Sus datos fueron guardados satisfactoriamente');</script>"; 

 



//imagen especial si existe
$archivo = $HTTP_POST_FILES['pauta_archivo']['name'];
$separar = explode('.',$archivo);
$nombre=$separar[0];
$extension=$separar[1];
$ext=".".$extension;

if ($archivo<>'')
{
$nombre_original = $HTTP_POST_FILES['pauta_archivo']['name'];
$carpeta = '../../../../../documentos/pautas_edicion/';
$numerito=rand(0, 1115) .$ext;
$nombre_new = 'PAUTA'.'_'.$numerito;
$nombre_temporal = 'temporal'.$ext;
//echo"$nombre_temporal ";



if (move_uploaded_file($HTTP_POST_FILES['pauta_archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update pautas_post set archivo_pauta='$nombre_new' where  id_pauta = '$id_pauta'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 
}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>"; 

?>

