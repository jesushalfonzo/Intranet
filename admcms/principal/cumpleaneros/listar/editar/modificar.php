<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id"];  
$nombre=$_POST["nombre"];
$m_cumpleaneros_mes=$_POST["mes"];
$departamento=$_POST["departamento"];
$m_cumpleaneros_dia=$_POST["dia"];


$actualizar="UPDATE m_cumpleaneros SET m_cumpleaneros_nombre ='$nombre', m_cumpleaneros_dia ='$m_cumpleaneros_dia' , m_cumpleaneros_mes='$m_cumpleaneros_mes',  m_cumpleaneros_direccion ='$departamento' WHERE m_cumpleaneros_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
if($resultado){
echo "<script language='JavaScript'>alert('Sus datos fueron actualizados');</script>";
}
else{
echo "<script language='JavaScript'>alert('Error - Datos NO actualizados');</script>";
}



//LAS IMAGENES DESPUES
$foto = $_FILES['foto']['name'];
$separarlos = explode('.',$foto);
$archivos=$separarlos[0];
$extensiones=$separarlos[1];


if ($foto!='')
{
if($extensiones!='jpg'){
echo "<script language='JavaScript'>alert('Error, Solo se permiten archivos .jpg');</script>";  
exit();
}
$carpeta = '../../../../../multimedia/fotoscumple/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'Cumple'.$id.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="UPDATE m_cumpleaneros SET  m_cumpleaneros_foto='$nombre_new' WHERE m_cumpleaneros_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}

//FIN



echo "<script language='JavaScript'>document.location.href='../index.php?tkl=$m_cumpleaneros_mes';</script>";

?>