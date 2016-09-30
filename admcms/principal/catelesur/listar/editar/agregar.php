<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$id=$_POST["idnota"];
$titulo=$_POST["titulo_nota"];
$contenido=$_POST["editor1"];
$leyenda_0_nota=$_POST["leyenda_0_nota"];
$date=date("Y-m-d H:i:s", time());
$sqlinsertar= "UPDATE m_catelesur SET m_catelesur_fecha='$date', m_catelesur_titulo='$titulo',  m_catelesur_contenido='$contenido', m_catelesur_leyenda='$leyenda_0_nota' WHERE m_catelesur_id='$id'";
$resultado=mysql_query($sqlinsertar,$link);
$lastshit=mysql_insert_id();
if($resultado){
echo "<script language='JavaScript'>alert('Los datos se actualizaron correctamente');</script>";
}
else{
echo "<script language='JavaScript'>alert('ERROR');</script>";
 echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
 exit(0);
}

  //LAS FOTOS Y LAS MUJERES PRIMERO
$foto = $_FILES['foto_0_nota']['name'];
$separar = explode('.',$foto);
$archivo=$separar[0];
$extension=$separar[1];
if($extension=='jpg'){

if ($foto!='')
{
$carpeta = '../../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'CTLSR_EDT_'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto_0_nota']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);

$actualizar="UPDATE m_catelesur SET  m_catelesur_foto='$nombre_new' WHERE m_catelesur_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
}
}

 echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
//FIN
?>

