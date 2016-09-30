<? include ('../../../extras/connect.php');
 

$titulo=$_POST["titulo"];
$subtitulo=$_POST["subtitulo"];
$autor=$_POST["autor"];



 
 

$tirasql="INSERT INTO lecturas (titulo_lectura, subtitulo_lectura, autor_lectura) VALUES (\"$titulo\", \"$subtitulo\", \"$autor\")";


//echo"$tirasql";
	   $link=Conectarse();   
       $resultado=mysql_query($tirasql,$link); 
if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }
$lastshit = mysql_insert_id();
      
$nombre_origarchivo = $HTTP_POST_FILES['archivo']['name'];

$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];


if ($nombre_origarchivo!='')
{
$carpeta = '../../../../imagenes/lecturasrecomendadas/';
//$numerito=rand(0, 1115) . '.$tipo';
//$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.$extension';

    if (move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_origarchivo); 
chmod($carpeta.$nombre_origarchivo, 0644);
$actualizar="update lecturas set  archivo_lectura='$nombre_origarchivo' where id_lectura='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}
 mysql_close($link); 



  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>