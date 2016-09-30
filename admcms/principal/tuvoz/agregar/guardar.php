<? include('../../../extras/connect.php');
$link=Conectarse();
$pregunta=$_POST["pregunta"];
$SQL="INSERT INTO tuvoz VALUES (Null, '$pregunta', NOW(), '', '0', '0')";
$inserta=mysql_query($SQL,$link);
$last=mysql_insert_id();
if ($inserta){
	 echo "<script language='JavaScript'>alert('Su pregunta ha sido guardada satisfactoriamente');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido cargados');</script>";
		
		}
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
$nombre_new = 'TUVOZ'.$last.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $imagen ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $imagen No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update tuvoz set tuvoz_imagenes='$nombre_new' where tuvoz_id='$last'"; 
$resultado=mysql_query($actualizar,$link); 
}
}
else {
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();
}
//FIN
		
		
		
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
 ?>