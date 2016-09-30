<? include('../../../../extras/connect.php');
include ('../../../../GENERAR/GenerarXML-Actualidad.php'); 
$link=Conectarse();
$id=$_POST["id"];
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$fecha=date('Y-m-d H:i:s', time());
$SQL="UPDATE m_inf_interes SET m_inf_interes_titulo='$titulo', m_inf_interes_sumario='$sumario', m_inf_interes_contenido='$contenido', m_inf_interes_fecha='$fecha' WHERE m_inf_interes_id='$id'";
$query=mysql_query($SQL, $link);
if ($query){
	 echo "<script language='JavaScript'>alert('Sus datos han sido Actualizados satisfactoriamente');</script>";
		}
		else {
		echo "<script language='JavaScript'>alert('ERROR los datos no han sido Actualizados');</script>";
		}

//imagen
$img = $_FILES['imagen']['name'];
$separar = explode('.',$img);
$nombre=$separar[0];
$extension=$separar[1];
$ext=".".$extension;

if ($img<>'')
{
$nombre_original = $_FILES['imagen']['name'];
$carpeta = '../../../../../imagenes/interes/';
$numerito=rand(0, 1115) .$ext;
$nombre_new = 'INT'.'_'.$numerito;
$nombre_temporal = 'temporal'.$ext;



if (move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update m_inf_interes set m_inf_interes_images='$nombre_new' where  m_inf_interes_id='$id'"; 
$resultado=mysql_query($actualizar,$link); 

}


  $slaches="../../../../../";
GenerarXML($slaches);

echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>