<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
//$titulo_pauta=$_POST["titulo_pauta"];
//$contenido=$_POST["contenido"];
//echo"este es el contenido del TItulo $titulo_pauta";


/**if (($titulo_pauta=="") or  ($contenido=="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
}

else {**/
$sqlinsertar= "INSERT INTO pautas_post 
	(contenido_pauta, titulo_pauta) 
	VALUES 
	(\"$contenido\", \"$titulo_pauta\")";
//echo"$sqlinsertar"; 
$resultado=mysql_query($sqlinsertar,$link); 
echo "<script language='JavaScript'>alert('Sus datos fueron guardados satisfactoriamente');</script>"; 
/* }*/
 

$lastshit = mysql_insert_id();

//imagen especial si existe
$archivo = $HTTP_POST_FILES['pauta_archivo']['name'];
$separar = explode('.',$archivo);
$nombre=$separar[0];
$extension=$separar[1];
$ext=".".$extension;

if ($archivo<>'')
{
$nombre_original = $HTTP_POST_FILES['pauta_archivo']['name'];
$carpeta = '../../../../documentos/pautas_edicion/';
$numerito=rand(0, 1115) .$ext;
$nombre_new = 'PAUTA'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal'.$ext;
//echo"$nombre_temporal ";



if (move_uploaded_file($HTTP_POST_FILES['pauta_archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update pautas_post set archivo_pauta='$nombre_new' where  id_pauta='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 

}
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";

?>

