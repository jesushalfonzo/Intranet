<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$nombre=$_POST["nombre"];
$departamento=$_POST["departamento"];
$cargo=$_POST["cargo"];


$sqlinsertar= "INSERT INTO m_nuevos_ingresos	(m_nuevos_ingresos_id, m_nuevos_ingresos_nombre, m_nuevos_ingresos_iddep, m_nuevos_ingresos_cargo, m_nuevos_ingresos_fecha) VALUES (Null, '$nombre', '$departamento', '$cargo', Now())";
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
$carpeta = '../../../../multimedia/ingresos/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'NINGRESO'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="UPDATE m_nuevos_ingresos SET  m_nuevos_ingresos_foto='$nombre_new' WHERE m_nuevos_ingresos_id='$lastshit'"; 
$resultado=mysql_query($actualizar,$link); 
}
}
else {
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();

}
 echo "<script language='JavaScript'>document.location.href='../listar/index.php?tkl=$mes';</script>";
//FIN
?>

