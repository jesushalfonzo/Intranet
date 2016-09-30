<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$foto_leyenda=$_POST["leyenda"];



$sqlinsertar= "INSERT INTO m_invitados_especiales VALUES (Null, '$titulo', '$sumario', '$contenido', '', '', '$foto_leyenda', '$autor', 'D', NOW())";
$resultado=mysql_query($sqlinsertar,$link); 
$lastshit = mysql_insert_id();

if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }; 
 

//SUBO LA FOTO PEQUEÑA DE SHIT
$nombre_foto_home = $HTTP_POST_FILES['foto_chiquita']['name'];


if ($nombre_foto_home!='')
{
$nombre_original = $HTTP_POST_FILES['foto_chiquita']['name'];
$carpeta = '../../../../imagenes/invitados/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INVI'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto_chiquita']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update  m_invitados_especiales set m_invitados_especiales_foto_home ='$nombre_new' where m_invitados_especiales_id='$lastshit'"; 

$resultado=mysql_query($actualizar,$link); 
}


//AHORA LA GRANDE

$nombre_foto_adentro = $HTTP_POST_FILES['foto_grande']['name'];


if ($nombre_foto_adentro!='')
{
$nombre_original = $HTTP_POST_FILES['foto_grande']['name'];
$carpeta = '../../../../imagenes/invitados/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INV_peq'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto_grande']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_invitados_especiales set m_invitados_especiales_adentro ='$nombre_new' where m_invitados_especiales_id='$lastshit'"; 

$resultado=mysql_query($actualizar,$link); 
}
 mysql_close($link); 
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>

