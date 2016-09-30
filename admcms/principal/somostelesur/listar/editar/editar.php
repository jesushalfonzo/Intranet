<? include ('../../../../extras/connect.php');
$idvideo=$_POST["idvideo"];
$titulo=$_POST["titulo"];
$aprobar=$_POST["aprobar"];

if($aprobar=="ONN"){
$status="A";
}
else{
$status="D";
}

$tirasql="UPDATE m_somostelesur SET m_somostelesur_titulo= '$titulo', m_somostelesur_estatus ='$status' WHERE m_somostelesur_id='$idvideo'";

	   $link=Conectarse();   
       $resultado=mysql_query($tirasql,$link); 
if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Actualización  Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Actualización NO Exitosa');</script>";   }

      
$nombre_origarchivo = $_FILES['foto']['name'];
if ($nombre_origarchivo!='')
{
$carpeta = '../../../../../multimedia/videos/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INFOEDIT'.$idvideo.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_somostelesur set  m_somostelesur_foto='$nombre_new' where m_somostelesur_id='$idvideo'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}

//PAL VIDEO


$nombre_origarchivo2 = $_FILES['archivo']['name'];

if ($nombre_origarchivo2!='')
{

$carpeta = '../../../../../multimedia/videos/';
$numerito=rand(0, 1115) . '.flv';
$nombre_new = 'ViDeEDIT_'.$idvideo.'_'.$numerito;
$nombre_temporal = 'temporal.flv';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo2 ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo2 No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_somostelesur set  m_somostelesur_archivo='$nombre_new' where m_somostelesur_id='$idvideo'";
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}

 mysql_close($link); 

  echo "<script language='JavaScript'>document.location.href='../index.php';</script>";


?>