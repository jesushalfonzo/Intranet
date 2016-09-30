<? include ('../../../../../extras/connect.php');?>
<? 

$idperfil=$_POST["id"];
$palabra_1_sucia=$_POST["palabra_1"];
$palabra_2_sucia=$_POST["palabra_2"];
$palabra_3_sucia=$_POST["palabra_3"];

   $palabra_1=trim($palabra_1_sucia);
   $palabra_2=trim($palabra_2_sucia);
   $palabra_3=trim($palabra_3_sucia);



$alinea=$_POST["aling"];
if ($alinea=="Derecha"){
$alinear="right";
}
if($alinea=="Izquierda"){
$alinear="left";
}
if($alinea=="Centro") {
$alinear="center";
}
$foto_perfil=$_POST["foto"];  // ojo aqui va la ruta de la imagen... o al menos el nombre del archivo.... !!!!

$leyenda_perfil=$_POST["foto_leyenda"];


 
$tirasql="INSERT INTO fotos_perfiles (id_perfil, palabra_1, palabra_2, palabra_3, alineacion, foto_leyenda) VALUES (\"$idperfil\", \"$palabra_1\", \"$palabra_2\",\"$palabra_3\",\"$alinear\", \"$leyenda_perfil\")";
//echo"$tirasql";
   $link=Conectarse();   
  $resultado=mysql_query($tirasql,$link);
  $lastshit = mysql_insert_id(); 
 if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Inclusión Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Inclusión NO Exitosa');</script>";   }


      
$nombre_foto_perfil = $HTTP_POST_FILES['foto']['name'];

if ($nombre_foto_perfil!='')
{
$nombre_original = $HTTP_POST_FILES['foto']['name'];
$carpeta = '../../../../../../imagenes/perfiles/';
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
$actualizar="update fotos_perfiles set ruta_imagen='$nombre_new' where id_fotos='$lastshit'"; 

$resultado=mysql_query($actualizar,$link); 
 echo "<script language='JavaScript'>document.location.href='../../index.php';</script>";
}
 mysql_close($link); 


 
 
?>