<? include ('../../../extras/connect.php');
 

$titulo=$_POST["titulo"];

//$archivo=$_POST["archivo"];  // ojo aqui va la ruta de la imagen... o al menos el nombre del archivo.... !!!!
//$tipo=$_POST["tipo"];//tipo de archivo
 
 

$tirasql="INSERT INTO documento (nombref, marca) VALUES (\"$titulo\", \"$tipodb\")";


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
if ($extension=='pdf'){
 $tipodb="p";
  }
 if(($extension=='doc') or ($extension=='odt')) {
 $tipodb="d";
  }
 if (($extension=='xls') or ($extension=='ods')) {
 $tipodb="x";
  }
 if ($extension=='zip') {
 $tipodb="z";
   }





if ($nombre_origarchivo!='')
{
$carpeta = '../../../../documentos/';
//$numerito=rand(0, 1115) . '.$tipo';
//$nombre_new = 'INF'.$lastshit.'_'.$numerito;
$nombre_temporal = 'temporal.$tipo_ext';

    if (move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_origarchivo ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_origarchivo No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_origarchivo); 
chmod($carpeta.$nombre_origarchivo, 0644);
$actualizar="update documento set  fichero='$nombre_origarchivo', marca='$tipodb' where id='$lastshit'"; 
//echo"$actualizar";
$resultado=mysql_query($actualizar,$link); 

}
 mysql_close($link); 



  echo "<script language='JavaScript'>document.location.href='../listar/index.php';</script>";
?>