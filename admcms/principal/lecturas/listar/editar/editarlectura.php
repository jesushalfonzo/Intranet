<? include ('../../../../extras/connect.php');?>

<? 

$id=$_POST["id"];
$titulo=addslashes($_POST["titulo"]);
$subtitulo=$_POST["subtitulo"];
$autor=$_POST["autor"];
$tirasql= "update lecturas set  titulo_lectura='$titulo', subtitulo_lectura='$subtitulo', autor_lectura='$autor' where id_lectura = $id";
//echo"$tirasql";
	   $link=Conectarse();   
      $resultado=mysql_query($tirasql,$link); 
  if ($resultado)
  {  
  echo "<script language='JavaScript'>alert('Modificación Exitosa');</script>";
   }
   else 
   { 
  echo "<script language='JavaScript'>alert('Modificación NO Exitosa');</script>";   }

$nombre_original_man= $HTTP_POST_FILES['archivo']['name'];
$separar = explode('.',$nombre_original_man);
$archivo=$separar[0];
$extension=$separar[1];

if ($nombre_original_man!='')
{
$carpeta = '../../../../../imagenes/lecturasrecomendadas/';
//$numerito=rand(0, 1115) . '.$marca_doc';
//$nombre_new = 'MNF'.$id_parrilla.'_'.$numerito;
$nombre_temporal = 'temporal.$extension';

    if (move_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'],$carpeta.$nombre_temporal)){
       echo "<script language='JavaScript'>alert('El archivo: $nombre_original_doc ha sido cargado correctamente');</script>";
    }else{
       echo "<script language='JavaScript'>alert('Ocurrió algún error al subir el arhivo: $nombre_original_doc No pudo guardarse');</script>";
    }

rename($carpeta.$nombre_temporal, $carpeta.$nombre_original_man); 
chmod($carpeta.$nombre_orig_doc, 0644);
$actualizar="update lecturas set   archivo_lectura='$nombre_original_man' where  id_lectura='$id'"; 
$resultado=mysql_query($actualizar,$link); 

}


echo "<script language='JavaScript'>document.location.href='../index.php';</script>";
?>


