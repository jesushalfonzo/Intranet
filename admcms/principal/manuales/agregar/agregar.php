<? include ('../../../extras/connect.php');
 

$titulo=$_POST["titulo"];
$sumario=$_POST["sumario"];


 
 

$tirasql="INSERT INTO manuales (titulo, sumario) VALUES (\"$titulo\", \"$sumario\")";


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
      
$nombre_origarchivo = $_FILES['archivo']['name'];

$separar = explode('.',$nombre_origarchivo);
$archivo=$separar[0];
$extension=$separar[1];


if ($nombre_origarchivo!='')
{
$carpeta = '../../../../manuales_de_prensa/';
//$numerito=rand(0, 1115) . '.$tipo';
//$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.$extension';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_origarchivo); 
chmod($carpeta.$nombre_origarchivo, 0644);
$actualizar="update manuales set  archivo='$nombre_origarchivo' where id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}
 mysql_close($link); 



  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>