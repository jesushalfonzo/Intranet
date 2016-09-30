<? include ('../../../../extras/connect.php');?>
<? 
$link=Conectarse(); 
$id=$_POST["id_busca"];
$id2=$id;
//echo"$id";
$titulo=$_POST["titulo"];  
$sumario=$_POST['sumario'];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$leyenda=$_POST["leyenda_principal"];
$status=$_POST["status"];

//if ($status=="off"){ $estatus="D"; } else { $estatus="A"; }
if ($status!=='A'){$status='D';}


$actualizar="update perfiles set contenido='$contenido', titulo='$titulo', sumario='$sumario', autor='$autor', leyenda_principal='$leyenda', status='$status' where id='$id2'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

echo "<script language='JavaScript'>alert('Sus datos fueron actualizados correctamente');</script>";

$nombre_origfoto_nota = $HTTP_POST_FILES['foto']['name'];

if ($nombre_origfoto_nota<>"") 
{
$nombre_original = $HTTP_POST_FILES['foto']['name'];
$carpeta = '../../../../../imagenes/perfiles/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'MNF'.$id_nota.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update perfiles set   foto_principal='$nombre_new' where  id='$id'"; 
$resultado=mysql_query($actualizar,$link); 
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
}
echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>