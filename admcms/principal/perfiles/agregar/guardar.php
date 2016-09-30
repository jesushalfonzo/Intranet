<? include ('../../../extras/connect.php');?>
<? 
$link=Conectarse();   
$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];
$contenido=$_POST["contenido"];
$autor=$_POST["autor"];
$foto_leyenda=$_POST["leyenda"];

if (($titulo=="") or  ($contenido=="")) {
echo "<script language='JavaScript'>alert('Faltan datos en su formulario');</script>";
}

else {
$sqlinsertar= "INSERT INTO perfiles 
	(titulo, sumario, contenido, autor, leyenda_principal) 
	VALUES 
	(\"$titulo\", \"$sumario\", \"$contenido\", \"$autor\", \"$foto_leyenda\")";
//echo"$sqlinsertar"; 
$resultado=mysql_query($sqlinsertar,$link); 
$lastshit = mysql_insert_id();
}
if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }; 
 


$nombre_foto_perfil = $HTTP_POST_FILES['foto']['name'];


if ($nombre_foto_perfil!='')
{
$nombre_original = $HTTP_POST_FILES['foto']['name'];
$carpeta = '../../../../imagenes/perfiles/';
$numerito=rand(0, 1115) . '.jpg';
$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.jpg';

    if (move_uploaded_file($HTTP_POST_FILES['foto']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_new); 
chmod($carpeta.$nombre_new, 0644);
$actualizar="update perfiles set foto_principal ='$nombre_new' where id='$lastshit'"; 

$resultado=mysql_query($actualizar,$link); 
}
 mysql_close($link); 
echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>

