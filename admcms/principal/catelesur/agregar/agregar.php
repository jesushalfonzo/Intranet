<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo_nota"];
$contenido=$_POST["editor1"];


$sqlinsertar= "INSERT INTO m_catelesur(m_catelesur_id, m_catelesur_fecha, m_catelesur_titulo, m_catelesur_contenido) VALUES (Null, Now(), '$titulo', '$contenido')";
$resultado=mysql_query($sqlinsertar,$link);
$lastshit=mysql_insert_id();
if($resultado){
echo "<script language='JavaScript'>alert('Los datos se guardaron correctamente');</script>";
}
else{
echo "<script language='JavaScript'>alert('ERROR');</script>";
 echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
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
$carpeta = '../../../../multimedia/imagenes/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'CTLSR'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto_0_nota']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $foto ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $foto No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$leyenda_0_nota=$_POST["leyenda_0_nota"];
$actualizar="UPDATE m_catelesur SET  m_catelesur_foto='$nombre_new', m_catelesur_leyenda='$leyenda_0_nota' WHERE m_catelesur_id='$lastshit'"; 
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

