<? include('../../../../extras/connect.php');
$link=Conectarse();
$id=$_POST["id"];
$pregunta=$_POST["pregunta"];
$imagen=$_POST["imagen"];
$SQL="UPDATE tuvoz SET tuvoz_pregunta='$pregunta' WHERE tuvoz_id='$id'";
$query=mysql_query($SQL, $link);
if ($query){
	 echo "<script language='JavaScript'>alert('Sus datos han sido Actualizados satisfactoriamente');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido Actualizados');</script>";
		}


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
$nombre_new = 'VOZEDIT'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update tuvoz set  tuvoz_imagenes='$nombre_new' where tuvoz_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}

//FIN








echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>