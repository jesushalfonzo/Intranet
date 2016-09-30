<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id"];  
$nombre=$_POST["nombre"];
$cargo=$_POST["cargo"];
$departamento=$_POST["departamento"];


$actualizar="UPDATE m_nuevos_ingresos SET m_nuevos_ingresos_nombre ='$nombre', m_nuevos_ingresos_iddep ='$departamento' , m_nuevos_ingresos_cargo='$cargo' WHERE m_nuevos_ingresos_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
if($resultado){
echo "<script language='JavaScript'>alert('Sus datos fueron actualizados');</script>";
}
else{
echo "<script language='JavaScript'>alert('Error - Datos NO actualizados');</script>";
}



//LAS IMAGENES DESPUES
$foto = $HTTP_POST_FILES['foto']['name'];
$separarlos = explode('.',$foto);
$archivos=$separarlos[0];
$extensiones=$separarlos[1];


if ($foto!='')
{
if($extensiones!='jpg'){
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();
}
$carpeta = '../../../../../multimedia/ingresos/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'Cumple'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="UPDATE m_nuevos_ingresos SET  m_nuevos_ingresos_foto='$nombre_new' WHERE m_nuevos_ingresos_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}

//FIN



echo "<script language='JavaScript'>document.location.href='../index.php';</script>";

?>