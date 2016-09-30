<? 
include ('../../../extras/connect.php');
$linky=Conectarse();
$titulo=$_POST["titulo"];
$extension=strtolower($_POST["extension"]);
$enlace=$_POST["enlace"];
$SQL="INSERT INTO m_ventanaemergente VALUES(Null, '$titulo', '', 'NO', '$enlace', '$extension')";
$query=mysql_query($SQL, $linky);
$last = mysql_insert_id();
if($query){
 echo "<script language='JavaScript'>alert('Información guardada correctamente');</script>";
}
else{
echo "<script language='JavaScript'>alert('Error cargando los datos');</script>";

 exit();
}


 $nombre_origarchivo=$_FILES['archivo']['name'];

 if ($nombre_origarchivo!='')
{
$carpeta = '../../../../multimedia/home/';
$numerito=rand(0, 1115) . '.'.$extension;
$nombre_new = 'ARCH_INT'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.'.$extension;

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_ventanaemergente set  m_ventanaemergente_imagen='$nombre_new' where m_ventanaemergente_id ='$last'"; 
$resultado=mysql_query($actualizar,$linky);
}

 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>