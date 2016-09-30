<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$nombre=$_POST["nombre"];
$fecha=$_POST["fecha"];
$departamento=$_POST["departamento"];


$sqlinsertar= "INSERT INTO cumpleanos	(fecha, nombre, departamento) 	VALUES 	(\"$fecha\", \"$nombre\", \"$departamento\")";
$resultado=mysql_query($sqlinsertar,$link);
$lastshit=mysql_insert_id();
echo "<script language='JavaScript'>alert('Los datos se guardaron correctamente');</script>";
		  

  //LAS FOTOS Y LAS MUJERES PRIMERO
$foto = $HTTP_POST_FILES['foto']['name'];
$separar = explode('.',$foto);
$archivo=$separar[0];
$extension=$separar[1];
if($extension=='jpg'){

if ($foto!='')
{
$carpeta = '../../../../multimedia/fotoscumple/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'CUMPLE'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update cumpleanos set  foto='$nombre_new' where id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 
}
}
else {
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();

}
 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
//FIN
?>

